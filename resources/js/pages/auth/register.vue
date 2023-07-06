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
      <v-text-field 
        v-model="form.codigo"
        label="Código de estudiante"
        outlined>
      </v-text-field>
      <v-text-field 
        v-model="form.password"
        label="Contraseña"
        outlined>
      </v-text-field>
      <v-text-field 
        v-model="form.password_confirmation"
        label="Confirmar Contraseña"
        outlined>
      </v-text-field>
      <div class="d-flex justify-center">
        <v-btn>
          Registrar
        </v-btn>
        <v-btn @click="close()">
          Cancelar
        </v-btn>
      </div>
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
    async register() {
      // Register the user.
      const { data } = await this.form.post("/api/register");

      // Must verify email fist.
      if (data.status) {
        this.mustVerifyEmail = true;
      } else {
        // Log in the user.
        const {
          data: { token },
        } = await this.form.post("/api/login");

        // Save the token.
        this.$store.dispatch("auth/saveToken", { token });

        // Update the user.
        await this.$store.dispatch("auth/updateUser", { user: data });

        // Redirect home.
        this.$router.push({ name: "home" });
      }
    },
    close(){
      this.dialog = false;
      this.form.reset();
    }
  },
};
</script>
