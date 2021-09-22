<template>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>CADASTRAR MODEL</h4>
        </div>
        <div class="card-body">
          <form @submit.prevent="create">
            <div class="row">
              <div class="col-12 mb-2">
                <div class="form-group">
                  <label>MODEL</label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="model.MODEL"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "add-model",
  data() {
    return {
      model: {
        MODEL: "",
      },
    };
  },
  methods: {
    async create() {
      await this.axios
        .post("/api/model", this.model)
        .then((response) => {
          this.$router.push({ name: "modelList" });
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>