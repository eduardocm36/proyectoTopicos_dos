<template >
  <v-card>
  <div style="background-color: #202225;" class="mt-4" >
    <v-row  >
      <v-col cols="12" md="1" >
         <v-row > 
          <v-avatar size="60px" class="ml-6 mt-4" >
           <!-- <v-img v-for="(i) in imagen"
                  :key="i"
                  :src="i.imag"></v-img> -->
                <v-img 
                    src="https://cdn.vuetifyjs.com/images/john.jpg">
                  </v-img>
          </v-avatar>
        </v-row>

        <v-row > 
          <v-avatar size="60px" class="ml-6 mt-4" >
                <v-img 
                    src="https://i.pinimg.com/736x/b5/49/41/b5494197b2d462c940f88988b203d290.jpg">
                  </v-img>
          </v-avatar>
        </v-row>

        <v-row > 
          <v-avatar size="60px" class="ml-6 mt-4" >
                <v-img 
                    src="https://d500.epimg.net/cincodias/imagenes/2016/07/04/lifestyle/1467646262_522853_1467646344_noticia_normal.jpg">
                  </v-img>
          </v-avatar>
        </v-row>

        <v-row > 
          <v-avatar size="60px" class="ml-6 mt-4" >
                <v-img 
                    src="https://cdn.vuetifyjs.com/images/john.jpg">
                  </v-img>
          </v-avatar>
        </v-row>

        <v-row > 
          <v-avatar size="60px" class="ml-6 mt-4" >
                <v-img 
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_0Fi4Paya8VLXML0EFyoIy0M9V8zAB2LMqg&usqp=CAU">
                  </v-img>
          </v-avatar>
        </v-row>

        <v-row > 
          <v-avatar size="60px" class="ml-6 mt-4" >
                <v-img 
                    src="https://i.pinimg.com/736x/b5/49/41/b5494197b2d462c940f88988b203d290.jpg">
                  </v-img>
          </v-avatar>
        </v-row>

        <v-row > 
          <v-avatar size="60px" class="ml-6 mt-4" >
                <v-img 
                    src="https://d500.epimg.net/cincodias/imagenes/2016/07/04/lifestyle/1467646262_522853_1467646344_noticia_normal.jpg">
                  </v-img>
          </v-avatar>
        </v-row>


      
      </v-col>
      
      <v-col cols="12" md="2" style="background-color:#2f3136; te">
        <v-row class="ml-3 my-3" >
          <span class="white--text"> Equipo de Desarrollo</span>
        </v-row>

        <v-row class="ml-3 my-3" >
            <span class="white--text "> MUSICAS <br> </span>  
             <span v-for="(c) in MUSICAS"  :key="c" class="text-h7 white--text d-inline-block "> <br>  # {{ c.d }}</span>         
          </v-row>

          <v-row class="ml-3 my-3" >
            <span class="white--text "> GENERAL</span> 
            <br><span v-for="(c) in GENERAL"  :key="c" class="text-h7 white--text d-inline-block "> <br>  # {{ c.d }}</span>         
          
          </v-row>

          <v-row class="ml-3 my-3" >
            <span class="white--text "> GRADOS Y TITULOS</span> 
            <br><span v-for="(c) in GRADOS"  :key="c" class="text-h7 white--text d-inline-block ">   # {{ c.d }} <br></span>         
          
          </v-row>

          <v-row class="ml-3 my-3" >
            <span class="white--text "> PRACTICAS</span> 
            <br><span v-for="(c) in PRACTICAS"  :key="c" class="text-h7 white--text d-inline-block "> <br>  # {{ c.d }}</span>         
          
          </v-row>
        
      </v-col>

      <v-col cols="12" md="9" style="background-color: #000000;" >
        <v-row class=" d-flex justify-center mx-10 my-10">
            <v-col class=" d-flex justify-center mr-1 " cols="12" md="5" style="background-color: #18191c;" >
              <v-avatar class=" ml-6 my-10" size="90px" >
                <v-img 
                    src="https://img.freepik.com/vector-premium/icono-perfil-personas_24877-40756.jpg?w=2000">
                  </v-img>
              </v-avatar>                
            </v-col>

            <v-col class=" d-flex justify-center ml-1" cols="12" md="5" style="background-color: #893143;">
              <v-avatar class=" ml-6 my-10" size="90px" >
                <v-img 
                    src="https://i.pinimg.com/736x/b5/49/41/b5494197b2d462c940f88988b203d290.jpg">
                  </v-img>
              </v-avatar>  
            </v-col>
        </v-row>

        <v-row class=" d-flex justify-center mx-10 my-10" >
            <v-col class=" d-flex justify-center 12 mr-1"  cols="12" md="5" style="background-color: #594a61;">
              <v-avatar class=" ml-6 my-10" size="90px" >
                <v-img 
                    src="https://d500.epimg.net/cincodias/imagenes/2016/07/04/lifestyle/1467646262_522853_1467646344_noticia_normal.jpg">
                  </v-img>
              </v-avatar>
            </v-col>
            <v-col class=" d-flex justify-center 12 ml-1" md="5" style="background-color: #beaea0;">
              <v-avatar class=" ml-6 my-10" size="90px" >
                <v-img 
                    src="https://acortar.link/sAvrMX">
                  </v-img>
              </v-avatar>
            
            </v-col>
        </v-row>
        
      </v-col>

    </v-row>
  </div>

  </v-card>
</template>


<script>
export default {
  data () {
    return{
      imagen: [
        {
          imag: "https://cdn.vuetifyjs.com/images/john.jpg"
        },
        {
          imag: "https://acortar.link/PnX0https://i.pinimg.com/736x/b5/49/41/b5494197b2d462c940f88988b203d290.jpgHC"
        },
        {
          imag: "https://d500.epimg.net/cincodias/imagenes/2016/07/04/lifestyle/1467646262_522853_1467646344_noticia_normal.jpg"
        }

      ],

        MUSICAS: [{ d:"musicas"},{d:"music-comands"} ],
         GENERAL:[ { d:"chat-general"},{d:"Reuniones Generales"}],
         GRADOS: [{ d:"herramientas"},{d:"tareas"},{d:"chat"},{d:"documentos"},
                  {d:"extras"},{d:"capturas"},{d:"Reuniones"}],
         PRACTICAS:[ { d:"tarea"}]

    
  }
}

};
</script>