<template>
  <v-card elevation="0" class="pa-3">
    <div></div>
    <div>
      <v-btn @click="enviarPanel">
        enviar
      </v-btn>
    </div>
    <div>
      <v-card-title>
        Paneles de Escuela
        <v-spacer></v-spacer>
        <v-text-field v-model="buscar" append-icon="mdi-magnify" label="Buscar">
        </v-text-field>
      </v-card-title>
      <v-data-table
        :headers="headers"
        :items="newsPaneles"
        elevation="0"
        :items-per-page="8"
        :search="buscar">
      </v-data-table>
    </div>
  </v-card>
</template>
<script>
import Form from "vform";
export default {
  name:"dash_escuela",
  data() {
    return {
      newsPaneles: [],
      buscar: "",
      form: new Form({
        nombre: "",
        tipo: ""
      }),
      headers: [
        { text: "Nombre", value: "nombre" },
        { text: "Tipo", value: "tipo" }
      ]
    };
  },
  methods: {
    enviarPanel() {
      this.form.nombre = "nombre";
      this.form.tipo = 1;
      this.form.post("/api/add-pandel-escuela").then(response => {
        this.newsPaneles.push(this.form);
      });
    }
  }
};
</script>
