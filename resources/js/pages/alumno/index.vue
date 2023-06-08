<template>
  <div>
    <navigation :items="items" :paneles="paneles" />
    <div>
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import { mapState } from "vuex";
import navigation from "../../components/navigation.vue";

export default {
  middleware: ["auth", "role:4"],
  metaInfo() {
    return { title: this.$t("Alumno") };
  },
  data() {
    return {
      items: [{ title: "Mis Paneles", icon: "mdi-account", to: "dash.alumno" }]
    };
  },
  components:{
    navigation
  },
  computed:{
    ...mapState('alumno', ['paneles'])
  }
};
</script>
