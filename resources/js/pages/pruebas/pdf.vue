<template>
    <div style="height: 100%">
      <v-textarea class="ma-10" label="Cuerpo del Fut" v-model="form.cuerpo"></v-textarea>
  
      <v-btn color="error" x-large @click="descargar()">
        ver
      </v-btn>
  
  
     
      <div style="height: 100%;">   
        <embed :src="url" 
        type="application/pdf"
        width="100%"
        height="100%" >
      </div>
    </div>
  </template>
  <script>
  import Form from 'vform'
  //import moment from 'moment'
  export default {
    
    data(){
      return {
        form: new Form({
          tramite:'ESTE TRAMITE',
          fase:'',
          faserol:'',
          nombre:'Oriol amiguito',
          dni:'',
          codigo:'',
          sumilla:'',
          destinatario:'',
          telefono:'',
          direccion:'',
          correo:'',
          facultad:'',
          escuela:'',
          fecha:'05-05-2023',
          anexo:'',
          cuerpo:'Que habiendo .....'
        }),
        url:'',
      }
    },methods:{
        descargar(){
            this.form.post('/api/download-prueba',{ headers: {
               // 'Content-Type': 'application/pdf',
            },
                'responseType': 'blob' // responseType is a sibling of headers, not a child
            }).then(response=>{    
                    console.log(response.data)
                    //const url = window.URL.createObjectURL(new Blob([response.data]));
                    var blob = new Blob([response.data], {type: "application/pdf"});
                     var link = window.URL.createObjectURL(blob);
  
                     this.url=link;
                     //window.open(link);
                     //console.log(url)
            }).catch(error=>{
                console.log(error);
            })
        }
    }
  }
  </script>