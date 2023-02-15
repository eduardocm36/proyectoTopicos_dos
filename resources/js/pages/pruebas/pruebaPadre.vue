<template >

  <div style=" height: 100%;"  >
    <v-row style="height: 100%; background-color: #000000;" >
      <v-col cols="12" md="1" style="background-color: #202225; max-width: 90px;"  >
        <v-row v-for=" i in 10" :key="i"  > 
          <v-avatar size="50px" class="ml-6 mt-4" >
                <v-img 
                    src="https://cdn.vuetifyjs.com/images/john.jpg">
                  </v-img>
          </v-avatar>
        </v-row>
      </v-col>
      
      <v-col cols="12" md="2" style="background-color:#2f3136;" class="px-0" >
          <v-toolbar dark  color="#2f3136" class="mx-0 px-0"> Equipo de Desarrollo</v-toolbar>       
          <v-list dense color="#2f3136" >
            <v-list-group
            v-for="(item,i) in listas" :key="i"
              color="white"
              :prepend-icon="item.icon"
              no-action
              sub-group
        
              
            >
              <template v-slot:activator >
                <v-list-item-title >{{ item.nombre }}</v-list-item-title>
              </template>
              <v-list dense color="#2f3136" class="ml-3">
                <v-list-item-group
                  color="white"
                  
                >
                  <v-list-item
                    v-for="(item, i) in item.lista"
                    :key="i"
                  >
                    <v-list-item-icon >
                      <v-icon  small>{{ item.icon }}</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content >
                      <v-list-item-title  v-text="item.nombre"></v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                </v-list-item-group>
              </v-list>

            </v-list-group>
          </v-list>
      </v-col>

      <v-col cols="12" md="9" style="background-color: #000000;" >

        <v-row class=" d-flex justify-center mx-10 my-10">
            <v-col v-for="(item,i) in imagen" :key="i" class=" d-flex justify-center mx-2 my-2 " cols="12" md="5"  style="height: 300px; position: relative;" :style="' background-color:'+item.color" >
              <v-avatar class=" my-auto mx-auto" size="90px" >
                <v-img 
                    :src="item.img">
                  </v-img>
              </v-avatar>     
              <v-avatar  style="position:absolute; right: 8px;bottom: 8px; " color="grey darken-3" size="30"><v-icon small dark>mdi-microphone-off</v-icon></v-avatar>           
            </v-col>
        </v-row>
        
      </v-col>

    </v-row>
  </div>

</template>


<script>
export default {
  data () {
    return{
      imagen: [
       {color:'#18191c', img:'https://img.freepik.com/vector-premium/icono-perfil-personas_24877-40756.jpg'},
       {color:'#893143', img:'https://i.pinimg.com/736x/b5/49/41/b5494197b2d462c940f88988b203d290.jpg'},
       {color:'#594a61', img:'https://d500.epimg.net/cincodias/imagenes/2016/07/04/lifestyle/1467646262_522853_1467646344_noticia_normal.jpg'},
       {color:'#beaea0', img:'https://acortar.link/sAvrMX'},
      ],

         listas:[
            {
              nombre:'MUSICAS',
              icon:'mdi-music',
              lista:[
                {nombre:'musicas',icon:'mdi-pound'},
                {nombre:'music-comands',icon:'mdi-pound'},
              ]
            },
            {
              nombre:'GENERAL',
              icon:'',
              lista:[
                {nombre:'chat-general',icon:'mdi-pound'},
                {nombre:'Reuniones Generales',icon:'mdi-volume-high'},
              ]
            },
            {
              nombre:'GRADOS Y TITULOS',
              icon:'',
              lista:[
                {nombre:'herramientas',icon:'mdi-pound'},
                {nombre:'tareas',icon:'mdi-pound'},
                {nombre:'chat',icon:'mdi-pound'},
                {nombre:'documentos',icon:'mdi-pound'},
                {nombre:'capturas',icon:'mdi-pound'},
                {nombre:'Reuniones',icon:'mdi-volume-high'},
              ]
            },
            {
              nombre:'PRACTICANTES',
              icon:'',
              lista:[
                {nombre:'Materiales',icon:'mdi-pound'},
                {nombre:'tareas',icon:'mdi-pound'},
                {nombre:'chat',icon:'mdi-pound'},
                {nombre:'Reuniones A',icon:'mdi-volume-high'},
                {nombre:'Reuniones B',icon:'mdi-volume-high'},
              ]
            },
         ],

    
  }
}

};
</script>
