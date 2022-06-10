<template>
  <div class="org-chart">
    <Head title="Орг. структура" />

    <Heading class="mb-6">Орг. структура</Heading>

    <Card
      class="flex flex-col items-center justify-center"
      style="min-height: 300px"
    >
      <!-- :pan (передвигать таблицу)  -->
      <organization-chart v-if="ds" class="table" :datasource="ds" @click="log"></organization-chart>
    </Card>
  </div>
</template>

<script>
import OrganizationChart from 'vue3-organization-chart'
import 'vue3-organization-chart/dist/orgchart.css'
import axios from 'axios'

export default {
  components: {
    OrganizationChart
  },

  data () {
    return {
      // ds: {
      //   'id': '1',
      //   'name': 'Mihail An',
      //   'title': 'Executive Director',
      //   'children': [
      //     { 'id': '2', 'name': 'Pyotr', 'title': 'Team-lead' },
      //     { 'id': '3', 'name': 'Max', 'title': 'Tech-lead',
      //       'children':
      //           [ {'id': '4', 'name': 'Tumen', 'title': 'Front-end Developer'}]
      //     },
      //     { 'id': '5', 'name': 'Sofia', 'title': 'Manager',
      //       'children':
      //       [ {'id': '10', 'name': 'Olga', 'title': 'Stuff'},
      //         {'id': '11', 'name': 'Vika', 'title': 'Stuff'},
      //         {'id': '12', 'name': 'Natalia', 'title': 'Stuff'}
      //       ]
      //     },
      //     { 'id': '6', 'name': 'Maria', 'title': 'Manager' },
      //     { 'id': '7', 'name': 'Sergei', 'title': 'Manager' },
      //     { 'id': '8', 'name': 'Alexei', 'title': 'Manager' },
      //   ]
      // }
      ds: null
    }
  },

  mounted () {
    Nova.request().get('/nova/work-structure').then(response => {
      console.log(response.data)
      //this.ds = response.data
    })
    // axios.get('/work-structure').then(response => {
    //   console.log('Axios working!')
    //   console.log(response)
    //   //this.ds = response.data
    // })
  },

  methods: {
    log(item) {
      console.log(item)
    }
  }
}
</script>

<style>
.org-chart .table {
  position: relative;
  width: 100%;
  border: none;
  overflow: auto;
}
</style>
