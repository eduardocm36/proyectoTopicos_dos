<template>
  <v-card flat tile>
    <v-container class="white" fluid>
      <v-subheader class="spacing-playground py-12 d-flex justify-space-between">
        <v-row class="d-flex align-center">
          <v-img
            lazy-src="https://picsum.photos/id/11/10/6"
            max-height="90"
            max-width="140"
            src="https://acortar.link/RqLdLA"
          >
          </v-img>
          <span class="text-h5 mx-1"> Classroom</span>
        </v-row>
        <v-img
          lazy-src="https://picsum.photos/id/11/10/6"
          max-height="70"
          max-width="90"
          src="https://img.freepik.com/vector-premium/icono-perfil-personas_24877-40756.jpg?w=2000"
        >
        </v-img>
      </v-subheader>

      <v-divider></v-divider>

      <v-row class="spacing-playground pa-10">
        <v-col v-for="(d, c) in cursos" :key="c" cols="12" sm="5" md="3">
          <v-card>
            <v-img
              :src="
                `https://us.123rf.com/450wm/valex113/valex1131607/valex113160700012/60124041-resumen-3d-de-ondas-con-part%C3%ADculas-en-el-fondo-negro-fondo-futurista-con-las-l%C3%ADneas-de-muchas-esfera.jpg${getImage()}`
              "
              height="200"
              width="300"
            >
              <span class="text-h5 white--text pl-4 pt-4 d-inline-block">
                {{ d.Curso }}
              </span>
              <br /><br />
              <br /><br />
              <v-row>
                <v-col cols="12" md="6">
                  <v-card-text
                    class="text-h8 white--text pl-4 pt-4 d-inline-block"
                  >
                    <strong> Docente:<br /> </strong> {{ d.docente }}
                  </v-card-text>
                </v-col>
                <v-col class="mx-15" cols="12" md="2">
                  <v-img
                    lazy-src="https://picsum.photos/id/11/10/6"
                    max-height="70"
                    max-width="90"
                    src="https://img.freepik.com/vector-premium/icono-perfil-personas_24877-40756.jpg?w=2000"
                    class="justify-end"
                  >
                  </v-img>
                </v-col>
              </v-row>
            </v-img>

            <v-card-actions class="white justify-end">
              <v-btn
                v-for="(imgico, i) in icono"
                :key="i"
                :color="imgico.color"
                class="white--text"
                fab
                icon
                small
              >
                <v-icon>{{ imgico.icon }}</v-icon>
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </v-card>
</template>

<script>
export default {
  data: () => ({
    cursos: [
      {
        Curso: "PROGRAMCION",
        docente: "Ing. RAMIREZ",
        Imag: ""
      },

      {
        Curso: "SIMULACION",
        docente: "Ing. NEGRETE",
        Imag: ""
      },

      {
        Curso: "TEORIA DE SISTEMAS",
        docente: "Ing. MUÑOZ",
        Imag: ""
      },

      {
        Curso: "ADMINITRACION",
        docente: "Ing. Sosa",
        Imag: ""
      }
    ],
    icono: [
      {
        icon: "mdi-email",
        color: "blue-grey darken-2"
      },
      {
        icon: "mdi-arrow-up-bold-box-outline",
        color: "blue-grey darken-2"
      }
    ]
  }),
  methods: {
    getImage() {
      const min = 550;
      const max = 560;
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }
  }
};
</script>
