<template>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Update Category</h4>
        </div>
        <div class="card-body">
          <form @submit.prevent="update">
            <div class="row">
              <div class="col-12 mb-2">
                <div class="form-group">
                  <label>Title</label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="model.MODEL"
                  />
                </div>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-primary">Update</button>
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
  name: "update-model",
  data() {
    return {
      model: {
        MODEL: "",
        _method: "patch",
      },
    };
  },
  mounted() {
    this.showModel();
  },
  methods: {
    async showModel() {
      await this.axios
        .get(`/api/model/${this.$route.params.id}`)
        .then((response) => {
          const { MODEL } = response.data;
          this.model.MODEL = MODEL;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    async update() {
      await this.axios
        .post(`/api/model/${this.$route.params.id}`, this.model)
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