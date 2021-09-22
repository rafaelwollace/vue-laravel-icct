<template>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>DQC84 Atualização</h4>
        </div>
        <div class="card-body">
          <form @submit.prevent="update">
            <div class="row">
              <div class="col-12 mb-2">
                <div class="form-group">
                  <label>MODEL</label>
                  <input type="text" class="form-control" v-model="dqc.MODEL" />
                </div>
              </div>
              <div class="col-12 mb-2">
                <div class="form-group">
                  <label>FAT_PART_NO</label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="dqc.FAT_PART_NO"
                  />
                </div>
              </div>
              <div class="col-12 mb-2">
                <div class="form-group">
                  <label>TOTAL_LOCATION</label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="dqc.TOTAL_LOCATION"
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
  name: "update-dqc",
  data() {
    return {
      dqc: {
        MODEL: "",
        FAT_PART_NO: "",
        TOTAL_LOCATION: "",
        _method: "patch",
      },
    };
  },
  mounted() {
    this.showDqc();
  },
  methods: {
    async showDqc() {
      await this.axios
        .get(`/api/dqc/${this.$route.params.id}`)
        .then((response) => {
          const { MODEL, FAT_PART_NO, TOTAL_LOCATION } = response.data;
          (this.dqc.MODEL = MODEL),
            (this.dqc.FAT_PART_NO = FAT_PART_NO),
            (this.dqc.TOTAL_LOCATION = TOTAL_LOCATION);
        })
        .catch((error) => {
          console.log(error);
        });
    },
    async update() {
      await this.axios
        .post(`/api/dqc/${this.$route.params.id}`, this.dqc)
        .then((response) => {
          this.$router.push({ name: "dqcList" });
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>