<template>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>CADASTRAR DQC841</h4>
        </div>
        <div class="card-body">
          <form @submit.prevent="create">
            <div class="row">
              <div class="col-12 mb-2">
                <div class="form-group">
                  <label>PARTS_NO</label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="dqc841.PARTS_NO"
                  />
                </div>
              </div>
              <div class="col-12 mb-2">
                <div class="form-group">
                  <label>UNT_USG</label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="dqc841.UNT_USG"
                  />
                </div>
              </div>
              <div class="col-12 mb-2">
                <div class="form-group">
                  <label>DESCRIPTION</label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="dqc841.DESCRIPTION"
                  />
                </div>
              </div>
              <div class="col-12 mb-2">
                <div class="form-group">
                  <label>REF_DESIGNATOR</label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="dqc841.REF_DESIGNATOR"
                  />
                </div>
              </div>
              <div class="col-12 mb-2">
                <div class="form-group">
                  <label>FAT_PART_NO</label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="dqc841.FAT_PART_NO"
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
  name: "add-dqc841",
  data() {
    return {
      dqc841: {
        PARTS_NO: "",
        UNT_USG: "",
        DESCRIPTION: "",
        REF_DESIGNATOR: "",
        FAT_PART_NO: "",
      },
    };
  },
  methods: {
    async create() {
      await this.axios
        .post("/api/dqc841", this.dqc841)
        .then((response) => {
          this.$router.push({ name: "dqc841List" });
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>