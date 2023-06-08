<template>
  <div  v-if="user">
    <navigation :items="items" :paneles="paneles" />
    <div>
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapState } from 'vuex';
import navigation from "../../components/navigation.vue";

export default {
  middleware: ["auth", "role:3"],

  metaInfo() {
    return { title: this.$t("Docente") };
  },
  data(){
    return{
      items: [
        { title: "Mis Paneles", icon: "mdi-account", to:"dash.docente" },
      ]
    }
  },
  components:{
    navigation
  },
  computed:{
    ...mapState('docente', ['paneles']),
    ...mapGetters({
      user:"auth/user"
    })
  }

};
</script>
