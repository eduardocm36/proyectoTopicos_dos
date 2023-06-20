<template>
  <div>
    <navigation :items="items" :paneles="paneles"/>
    <div>
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import { mapState } from 'vuex';
import navigation from "../../components/navigation.vue";

export default {
  middleware: ["auth", "role:2"],
  metaInfo() {
    // return { title: this.$t("Escuela") };
  },
  components: {
    navigation
  },
  data(){
    return{
      items: [
        { title: "Dashboard", icon: "mdi-home-city", to:"dash.escuela" },
        { title: "Mis Paneles", icon: "mdi-account", to:"panel.escuela" },
        { title: "Docentes", icon: "mdi-account", to:"docentes.escuela" },
        { title: "Cursos", icon: "mdi-account-group-outline", to:"cursos.escuela" }
      ]
    }
  },
  computed:{
    ...mapState('escuela', ['paneles'])
  }
};
</script>
