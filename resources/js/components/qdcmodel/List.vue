<template>
  <div class="row">
    <div class="col-12 mb-2 text-end">
      <router-link :to="{ name: 'modelAdd' }" class="btn btn-primary">
        Cadastrar
      </router-link>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Model</h4>
        </div>
        {{ message }}
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>MODEL</th>
                  <th>AÇÕES</th>
                </tr>
              </thead>
              <tbody v-if="model.length > 0">
                <tr v-for="(models, key) in model" :key="key">
                  <td>{{ models.id }}</td>
                  <td>{{ models.MODEL }}</td>
                  <td style="width: 200px">
                    <router-link
                      :to="{
                        name: 'modelEdit',
                        params: { id: models.id },
                      }"
                      class="btn btn-success"
                      >Editar</router-link
                    >
                    <button
                      type="button"
                      @click="deleteModel(models.id)"
                      class="btn btn-danger"
                    >
                      Deletar
                    </button>
                  </td>
                </tr>
              </tbody>
              <tbody v-else>
                <tr>
                  <td colspan="4" align="center">Nenhum Modal List.</td>
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
  name: "model",
  data() {
    return {
      model: [],
      message: "",
    };
  },
  mounted() {
    this.getModel();
  },
  methods: {
    async getModel() {
      await this.axios
        .get("/api/model")
        .then((response) => {
          this.model = response.data;
        })
        .catch((error) => {
          console.log(error);
          this.model = [];
        });
    },
    deleteModel(id) {
      if (confirm("Deseja realmente Deletar ?")) {
        this.axios
          .delete(`/api/model/${id}`)
          .then((response) => {
            this.getModel();
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },
  },
};
</script>