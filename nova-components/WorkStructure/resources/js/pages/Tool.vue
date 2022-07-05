<template>
  <div class="org-chart">
    <Head title="Work Structure" />

    <Heading class="mb-6">Орг. структура</Heading>

    <Card
      class="flex flex-col items-center justify-center  "
      style="min-height: 300px"
    >
      <!-- <organization-chart :datasource="orgChart" class="table"></organization-chart>-->
      <!-- 22.06. Добавил новый пакет Balkan OrgChart -->
      <div id="tree" ref="tree">
          <OrgChart @click="log"/>
      </div>
    </Card>
  </div>
</template>

<script>
import OrgChart from '@balkangraph/orgchart.js'

export default {
  data() {
    return {
      nodes: []
    }
  },

  components: {
    OrgChart
  },

  methods: {
    mytree: function(domEl, x) {
      this.chart = new OrgChart (domEl, {
        nodes: x,
        scaleInitial:OrgChart.match.boundary,
        mouseScrool: OrgChart.action.scroll,
        nodeBinding: {
          field_0: "name",
          field_1: "title",
          img_0: "img"
        }
      });
    },
  },

  async mounted() {
    await Nova.request().get('/api/nova/work-structure')
        .then(response => {
          this.nodes = response.data;
          this.mytree(this.$refs.tree, this.nodes)
        })
        .catch(error => { console.log(error.message)})
  }
}
</script>

<style scoped>
html, body {
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  overflow: hidden;
}

#tree {
  width: 100%;
  height: 100%;
}
</style>
