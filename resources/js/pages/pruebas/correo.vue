<template>
    <div>
        <v-card>
            <v-text-field
            label="Asunto"
            color="green"
            v-model="form.asunto"
            ></v-text-field>
            <v-textarea
            label="Cuerpo del Mensaje "
            color="primary"
            v-model="form.cuerpo"
            ></v-textarea>
            <v-card-actions>
                <v-btn @click="enviar()" color="warning">Enviar mail</v-btn>
            </v-card-actions>
        </v-card>

        <v-alert v-if="mensaje" type="info">{{ mensaje }}</v-alert>
        
    </div>
</template>
<script>
import Form from 'vform'
export default {
    data(){
        return{
            mensaje:'',
            form:new Form({
                asunto:'',
                cuerpo:'',
            })
        }
    },methods:{
        enviar(){
            this.mensaje='';
            this.form.post('/api/enviarcorreo').then(response=>{
                this.mensaje=response.data;
            })
        }
    }
}
</script>