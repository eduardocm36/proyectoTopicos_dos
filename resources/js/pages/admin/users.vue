<template>
  <div class="pa-3">
    <v-card class="mb-3 d-flex align-center">
      <v-card-title>
        Usuarios
      </v-card-title>
      <addUser/>
    </v-card>
    <v-card>
      <v-data-table
        :headers="headers"
        :items="usersDup"
        :loading="loading"
        loading-text="Cargando datos">
      </v-data-table>
    </v-card>
  </div>
</template>
<script>
import { mapActions, mapState } from 'vuex';
import addUser from "~/components/admin/newUser.vue";

export default {
  name: "controlUser",
  created() {
    this.getUsers()
  },
  components:{
    addUser
  },
  data() {
    return {
      headers: [
        { text: "Nombre", value: "name" },
        { text: "DNI", value: "dni" },
        { text: "Rol", value: "rol" },
        { text: "Email", value: "email" },
        { text: "Acciones", value: "actions" }
      ],
    };
  },
  computed:{
    ...mapState("admin_users", ["usersDup", "loading"]),
  },
  methods:{
    ...mapActions("admin_users", ["getUsers"]),
  }
};
</script>
