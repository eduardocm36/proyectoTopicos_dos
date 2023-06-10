<template>
  <v-dialog v-model="dialog">
    <template v-slot:activator="{ on, attrs }">
      <v-btn v-bind="attrs" v-on="on">
        <v-icon>
          mdi-account-plus
        </v-icon>
        Agregarghggjhjh
      </v-btn>
    </template>
    <v-card>
    </v-card>
  </v-dialog>
</template>


<script>

export default {
  name: "componentea",
  components: {
  },
  data() {
    return {
      dialog: false
    };
  }
};
</script>
