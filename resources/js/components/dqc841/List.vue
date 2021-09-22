<template>
  <div class="row">
    <div class="col-12 mb-2 text-end">
      <router-link :to="{ name: 'dqc841Add' }" class="btn btn-primary">
        Cadastrar
      </router-link>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>DQC841</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>PARTS_NO</th>
                  <th>UNT_USG</th>
                  <th>DESCRIPTION</th>
                  <th>UPDATE_DT</th>
                  <th>FAT_PART_NO</th>
                  <th>AÇÕES</th>
                </tr>
              </thead>
              <tbody v-if="dqc841.length > 0">
                <tr v-for="(dqcs, key) in dqc841" :key="key">
                  <td>{{ dqcs.ID }}</td>
                  <td>{{ dqcs.PARTS_NO }}</td>
                  <td>{{ dqcs.UNT_USG }}</td>
                  <td>{{ dqcs.DESCRIPTION }}</td>
                  <td>{{ dqcs.UPDATE_DT }}</td>
                  <td>{{ dqcs.FAT_PART_NO }}</td>
                  <td style="width: 200px">
                    <router-link
                      :to="{
                        name: 'dqc841Edit',
                        params: { id: dqcs.ID },
                      }"
                      class="btn btn-success"
                      >Editar</router-link
                    >
                    <button
                      type="button"
                      @click="deleteDqc841(dqcs.ID)"
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
  name: "dqc841",
  data() {
    return {
      dqc841: [],
    };
  },
  mounted() {
    this.getDqc841();
  },
  methods: {
    async getDqc841() {
      await this.axios
        .get("/api/dqc841")
        .then((response) => {
          this.dqc841 = response.data;
        })
        .catch((error) => {
          console.log(error);
          this.dqc841 = [];
        });
    },
    deleteDqc841(id) {
      if (confirm("Deseja realmente Deletar este Item ?")) {
        this.axios
          .delete(`/api/dqc841/${id}`)
          .then((response) => {
            this.getDqc841();
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },
  },
};
</script>