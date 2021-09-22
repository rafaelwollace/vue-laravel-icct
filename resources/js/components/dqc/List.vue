<template>
  <div class="row">
    <div class="col-12 mb-2 text-end">
      <router-link :to="{ name: 'dqcAdd' }" class="btn btn-primary">
        Cadastrar
      </router-link>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>DQC84</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
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
              <tbody v-if="dqc.length > 0">
                <tr v-for="(dqcs, key) in dqc" :key="key">
                  <td>{{ dqcs.ID }}</td>
                  <td>{{ dqcs.md }}</td>
                  <td>{{ dqcs.FAT_PART_NO }}</td>
                  <td>{{ dqcs.TOTAL_LOCATION }}</td>
                  <td>{{ dqcs.CREATE_DT }}</td>
                  <td>{{ dqcs.UPDATE_DT }}</td>
                  <td style="width: 200px">
                    <router-link
                      :to="{
                        name: 'dqcEdit',
                        params: { id: dqcs.ID },
                      }"
                      class="btn btn-success"
                      >Editar</router-link
                    >
                    <button
                      type="button"
                      @click="deleteDqc(dqcs.ID)"
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
  name: "dqc",
  data() {
    return {
      dqc: [],
    };
  },
  mounted() {
    this.getDqc();
  },
  methods: {
    async getDqc() {
      await this.axios
        .get("/api/dqc")
        .then((response) => {
          this.dqc = response.data;
        })
        .catch((error) => {
          console.log(error);
          this.dqc = [];
        });
    },
    deleteDqc(id) {
      if (confirm("Deseja realmente Deletar ?")) {
        this.axios
          .delete(`/api/dqc/${id}`)
          .then((response) => {
            this.getDqc();
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },
  },
};
</script>