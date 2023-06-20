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

 middleware:["auth", "role:1"],

  metaInfo() {
    return { title: this.$t("Administrador") };
  },
  components: {
    navigation
  },
  data() {
    return {
      items: [
        { title: "Control de Paneles", icon: "mdi-account", to: "dash.admin" },
        { title: "Usuarios", icon: "mdi-account", to: "users.admin" },
        { title: "Cursos", icon: "mdi-account", to: "cursos.admin" },
        { title: "Mis Paneles", icon: "mdi-account", to: "paneles.admin" }
      ]
    };
  },
  components: {
    navigation
  },
  computed: {
    ...mapState("admin", ["paneles"]),
  }

};
</script>

