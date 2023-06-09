<template>
  <div id="app">
    <v-header></v-header>
    <!-- <div class="d-flex justify-content-center" v-if="loading">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div> -->
    <router-view></router-view>
    <template v-if="ERROR">
      <mdb-alert color="danger" @click.native="closeAlert" dismiss>
        <strong>Ошибка!</strong> {{ ERROR }}
      </mdb-alert>
    </template>
  </div>
</template>

<script>
//импорт компонентов
import vHeader from "./components/Header";
import { mapGetters, mapActions } from "vuex";

export default {
  name: "App",
  components: {
    vHeader,
  },
  data() {
    return {
      isAlertOpen: true,
    };
  },
  computed: {
    ...mapGetters(["ERROR"]),
  },
  methods: {
    ...mapActions(["CLEAR_ERROR"]),
    closeAlert() {
      this.CLEAR_ERROR();
      this.isAlertOpen = false;
    },
  },
};
</script>

<style lang="scss">
body {
  background: #ef6c00;
}
</style>
