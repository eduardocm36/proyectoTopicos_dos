<template >
    <div class="mt-5 mx-4">
        <v-card  class="card-shadow mb-4 py-2">
            <v-card-title class="ma-1">
                <v-row >
                    <v-toolbar-title class="my-2"> LISTA DE EVALUADORES</v-toolbar-title>
                    <v-divider
                    class="mx-4"
                    inset
                    vertical
                    ></v-divider>
                    
                    <v-text-field
                    v-model="search"
                    append-icon="mdi-magnify"
                    label="Buscar"
                    single-line
                    hide-details
                    color="#42C2FF"
                    ></v-text-field> 
                    <v-spacer></v-spacer>
                    <v-dialog
                        transition="dialog-top-transition"
                        max-width="550"
                        v-model="dialog"
                        persistent
                     >
                        <template v-slot:activator="{ on, attrs }" >
                        <v-btn
                            color="primary"
                            v-bind="attrs"
                            v-on="on"                            
                            style="color:#fff; font-weight:650;"
                            class="text-capitalize my-2 btn-shadow"
                        >Nuevo</v-btn>
                        </template>
                        <template>
                           <v-card>
                            <v-toolbar
                                color="primary"
                                dark
                            >Agrega un nuevo Evaluador</v-toolbar>
                            <form>
                                <v-card-text>
                                
                                </v-card-text>
                                                                                                
                            </form>

                            <v-card-actions>
                                <v-btn class="ml-auto"
                                    text
                                    @click="close()"
                                >cerrar</v-btn>
                            </v-card-actions>
                           </v-card>
                        </template>
                    </v-dialog>
                    </v-row>
            </v-card-title>
        </v-card>
        
            <v-data-table 
                :headers="headers"
                :items="evaluadores"     
                :items-per-page="10"
                :search="search"
               
                id="evaluador"
                >
                    
                    <template v-slot:item.actions="{ item }">
                        <v-btn
                        small
                        rounded
                        color="#45EBA5"
                        elevation="0"
                        style="color:#fff;"
                        class="text-capitalize"                          
                        > Editar</v-btn>

                    </template>                

            </v-data-table>
    </div>
</template>
<script>
import axios from 'axios';
import Form from "vform";
export default {
    data(){
        return{            
            search:'',
            dialog:false,        
            headers: [
            { text: 'Código',align: 'start', value: 'eval_id'},
            { text: 'Colegiatura', value: 'eval_colegiatura' },
            { text: 'Apellidos', value: 'eval_apellidos' },
            { text: 'Nombres', value: 'eval_nombres' },
            { text: 'Profesion', value: 'eval_profesion' },
            { text: 'Estado', value: 'eval_estado' },        
            { text: 'Editar', value: 'actions', sortable: false },
            ],
           
            form :new Form({
               codigo:'',
            }),
        }
    },mounted(){
        this.fetchEval();
    },methods:{
        close(){
        this.dialog=false;
      },
      async fetchEval(){
         // console.log(this.form);
          await axios.get('/api/evaluadores_lista').then(response=>{
              console.log(response);
              this.evaluadores=response.data;
          });
      },
    }
}
</script>
<style>
 #evaluador .v-data-table-header th[role=columnheader] {
  font-size: 16px !important;
  color:#304156;
  background:#eaeff3  !important;
}

#evaluador, .card-shadow {
     box-shadow: 0 7px 14px rgba(50,50,93,.1),0 3px 6px rgba(0,0,0,.08)!important;
}
.btn-shadow{
     box-shadow: 0 2px 12px -1px rgb(85 85 85 / 8%), 0 4px 12px 0 rgb(85 85 85 / 6%), 0 1px 12px 0 rgb(85 85 85 / 3%) !important;
}

 .v-data-table table tbody tr:not(.v-data-table__selected):hover {
    box-shadow: 0 3px 15px -2px rgb(0 0 0 / 12%) !important;
    transform: translateY(-4px) !important;
     background: #fff !important;
}

.v-data-table table td {
    border-bottom: 0!important;
}
</style> 