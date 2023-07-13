<template>
  <v-dialog v-model="dialog" width="400">
    <template #activator="{attrs, on}">
      <v-btn
        v-bind="attrs"
        v-on="on"
        class="mr-4 mt-4"
        color="teal darken-2"
        dark
        block
      >Registrate</v-btn>
    </template>
    <v-card class="px-3">
      <v-card-title>
        Registrate
      </v-card-title>
      <form
      @submit.prevent="register()"
      @keydown="form.onKeydown($event)"
      >
        <v-text-field 
          required
          v-model="form.codigo"
          label="Código de estudiante"
          outlined>
        </v-text-field>
        <v-text-field 
          required
          v-model="form.password"
          label="Contraseña"
          outlined>
        </v-text-field>
        <v-text-field 
          required
          v-model="form.password_confirmation"
          label="Confirmar Contraseña"
          outlined>
        </v-text-field>
        <div class="d-flex justify-center">
          <v-btn type="submit">
            Registrar
          </v-btn>
          <v-btn @click="close()">
            Cancelar
          </v-btn>
        </div>
      </form>
    </v-card>
  </v-dialog>

</template>

<script>
import Form from "vform";
import LoginWithGithub from "~/components/LoginWithGithub";

export default {
  layout: "basic",
  components: {
    LoginWithGithub,
  },

  middleware: "guest",

  metaInfo() {
    return { title: this.$t("register") };
  },

  data: () => ({
    form:new Form({
          codigo: "",
          password: "",
          password_confirmation: "", 
      }),
    mustVerifyEmail: false,
    dialog: false
  }),

  methods: {
    register() {
      // Register the user.
       this.form.post("/api/register").then(res=>{
        alert('correo de verificación enviado a :'+res.data.email)
       }).catch(error=>{
        alert(error.response.data.message)
       });

    
    },
    close(){
      this.dialog = false;
      this.form.reset();
    }
  },
};
</script>
