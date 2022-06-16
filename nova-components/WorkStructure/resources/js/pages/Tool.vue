<template>
  <div class="org-chart">
    <Head title="Work Structure" />

    <Heading class="mb-6">Орг. структура</Heading>

    <Card
      class="flex flex-col items-center justify-center  "
      style="min-height: 300px"
    >
        <organization-chart :datasource="orgChart" class="table"></organization-chart>
    </Card>
  </div>
</template>

<script>
import OrganizationChart from 'vue3-organization-chart'
import 'vue3-organization-chart/dist/orgchart.css'
export default {
  data () {
    return {
      orgChart: {}
    }
  },

  components: {
    OrganizationChart
  },

  mounted () {
        Nova.request().get('/api/nova/work-structure')
        .then(response => {
          // На этом шаге находим Мишу, чтобы дальше работать от него
          this.orgChart = response.data.find((user) => user.name === 'Михаил Ан')
          // На этом шаге убираем Мишу из списка всех юзеров
          const users = response.data.filter((user) => user.name !== 'Михаил Ан')
          this.orgChart.children = [...users]
          console.log(this.orgChart)
        })
        .catch(error => { console.log(error.message)})
  }
}
</script>

<style>
.org-chart .table {
  position: relative;
  max-width: 100%;
  border: none;
  overflow: scroll;
}
</style>
