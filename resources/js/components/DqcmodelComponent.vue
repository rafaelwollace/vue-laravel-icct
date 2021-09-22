<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Listagem DQCMODEL</div>

          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>MODEL</th>
                  <th>AÇÕES</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="m in qdcmodel">
                  <th>{{ m.id }}</th>
                  <td>{{ m.MODEL }}</td>
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
      urlBase: "http://localhost:8000/api/model",
      qdcmodel: [],
    };
  },
  methods: {
    carregarLista() {
      axios
        .get(this.urlBase)
        .then((response) => {
          this.qdcmodel = response.data;
          console.log(this.qdcmodel);
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
