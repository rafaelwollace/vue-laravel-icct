<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Listagem DQC84</div>

          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>MODEL</th>
                  <th>FAT_PART_NO</th>
                  <th>TOTAL_LOCATION</th>
                  <th>CREATE_DT</th>
                  <th>UPDATE_DT</th>
                  <th>AÇÕES</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="m in dqc84">
                  <th>{{ m.ID }}</th>
                  <td>{{ m.md }}</td>
                  <th>{{ m.FAT_PART_NO }}</th>
                  <td>{{ m.TOTAL_LOCATION }}</td>
                  <th>{{ m.CREATE_DT }}</th>
                  <td>{{ m.UPDATE_DT }}</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      urlBase: "http://localhost:8000/api/dqc",
      dqc84: [],
    };
  },
  methods: {
    carregarLista() {
      axios
        .get(this.urlBase)
        .then((response) => {
          this.dqc84 = response.data;
          console.log(this.dqc84);
        })
        .catch((errors) => {
          console.log(errors);
        });
    },
  },
  mounted() {
    this.carregarLista();
  },
};
</script>