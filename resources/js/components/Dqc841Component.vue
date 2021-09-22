<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Listagem DQC841</div>

          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>PARTS_NO</th>
                  <th>UNT_USG</th>
                  <th>DESCRIPTION</th>
                  <th>FAT_PART_NO</th>
                  <th>AÇÕES</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="m in dqc1">
                  <th>{{ m.ID }}</th>
                  <th>{{ m.PARTS_NO }}</th>
                  <th>{{ m.UNT_USG }}</th>
                  <th>{{ m.DESCRIPTION }}</th>
                  <th>{{ m.FAT_PART_NO }}</th>
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
      urlBase: "http://localhost:8000/api/dqc1",
      dqc1: [],
    };
  },
  methods: {
    carregarLista() {
      axios
        .get(this.urlBase)
        .then((response) => {
          this.dqc1 = response.data;
          console.log(this.dqc1);
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