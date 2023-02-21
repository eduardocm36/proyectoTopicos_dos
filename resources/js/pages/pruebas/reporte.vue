<template>
    <div style="height: 100%">
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
            tramite:{      
                "id": 2,
                "tramite": "BACHILLER AUTOMATICO (PRESENCIAL)",
                "grado": "BACHILLER",
                "modalidad": "PRESENCIAL",
                "numero_participantes": 1,
                "per_nom": "Facundo Ignacio Gonzales de la vanguardia",
                "cod_alumno": "1824403000",
                "egreso": "2023-02-01",
                "obtencion": "AUTOMATICO",
                "titulo_proyecto": null,
                "linea_investigacion": null,
                "sub_linea_investigacion": null,
                "involucrados": [ ],
                "url_repositorio": null,
                "fecha_sustentacion": null,
                "escuela": "Ingeniería de Sistemas y Computación",
                "facultad": "Ingenieria",
                "fecha_inicio": "2023-02-16",
                "fecha_final": "2023-02-17",
                "duracion": 1,
                "total_fases": 11,
                "fases":[
                    {
                    "otros": [ ],
                    "id": 101,
                    "nombre": "Cargando Requisitos Basicos",
                    "numero": 1,
                    "fecha_inicio": "2023-02-16 20:35:22",
                    "fecha_fin": "2023-02-16 20:37:33",
                    "total_archivos": 0,
                    "aprobados": 0,
                    "observacion": 0,
                    "encargado_revisar": "Unidad de grados y títulos de facultad",
                    "encargado_ejecutar": "Alumno",
                    "duracion": 0
                    },
                    {
                    "otros": [ ],
                    "id": 102,
                    "nombre": "Expedito y aprobacion de Consejo de Facultad",
                    "numero": 2,
                    "fecha_inicio": "2023-02-16 20:37:33",
                    "fecha_fin": "2023-02-16 20:50:49",
                    "total_archivos": 0,
                    "aprobados": 0,
                    "observacion": 0,
                    "encargado_revisar": "Unidad de Vicerrectorado Academico",
                    "encargado_ejecutar": "Unidad de grados y títulos de facultad",
                    "duracion": 0
                    },
                    {
                    "otros": [ ],
                    "id": 103,
                    "nombre": "En vicerrectorado académico",
                    "numero": 3,
                    "fecha_inicio": "2023-02-16 20:50:49",
                    "fecha_fin": "2023-02-16 20:50:51",
                    "total_archivos": 0,
                    "aprobados": 0,
                    "observacion": 0,
                    "encargado_revisar": "Unidad de Vicerrectorado Academico",
                    "encargado_ejecutar": "Unidad de Vicerrectorado Academico",
                    "duracion": 0
                    },
                    {
                    "otros": [
                        {
                        "NOMBRE": "Estado de tramite: ",
                        "VALOR": "Agendado"
                        }
                    ],
                    "id": 104,
                    "nombre": "Para Agendar",
                    "numero": 4,
                    "fecha_inicio": "2023-02-16 20:50:51",
                    "fecha_fin": "2023-02-16 20:51:38",
                    "total_archivos": 0,
                    "aprobados": 0,
                    "observacion": 0,
                    "encargado_revisar": "Secretaria general Uno",
                    "encargado_ejecutar": "Secretaria general Uno",
                    "duracion": 0
                    },
                    {
                    "otros": [
                        {
                        "NOMBRE": "Estado de tramite: ",
                        "VALOR": "Agendado"
                        },
                        {
                        "NOMBRE": "Número de consejo: ",
                        "VALOR": "12"
                        },
                        {
                        "NOMBRE": "Fecha de consejo : ",
                        "VALOR": "2023-02-01"
                        }
                    ],
                    "id": 105,
                    "nombre": "Agendados",
                    "numero": 5,
                    "fecha_inicio": "2023-02-16 20:51:38",
                    "fecha_fin": "2023-02-16 20:51:50",
                    "total_archivos": 0,
                    "aprobados": 0,
                    "observacion": 0,
                    "encargado_revisar": "Secretaria general Uno",
                    "encargado_ejecutar": "Secretaria general Uno",
                    "duracion": 0
                    },
                    {
                    "otros": [
                        {
                        "NOMBRE": "Estado de trámite:",
                        "VALOR": "Aprobado"
                        },
                        {
                        "NOMBRE": "Número de consejo: ",
                        "VALOR": "12"
                        },
                        {
                        "NOMBRE": "Fecha de consejo :",
                        "VALOR": "2023-02-01"
                        },
                        {
                        "NOMBRE": "Número de oficio  :",
                        "VALOR": "1231"
                        }
                    ],
                    "id": 106,
                    "nombre": "Aprobados",
                    "numero": 6,
                    "fecha_inicio": "2023-02-16 20:51:50",
                    "fecha_fin": "2023-02-16 20:52:17",
                    "total_archivos": 0,
                    "aprobados": 0,
                    "observacion": 0,
                    "encargado_revisar": "Secretaria general Uno",
                    "encargado_ejecutar": "Secretaria general Uno",
                    "duracion": 0
                    },
                    {
                    "otros": [
                        {
                        "NOMBRE": "Estado:",
                        "VALOR": "Con resolución "
                        },
                        {
                        "NOMBRE": "Estado de registro:",
                        "VALOR": "Registrado"
                        },
                        {
                        "NOMBRE": "Número de resolución: ",
                        "VALOR": "123"
                        },
                        {
                        "NOMBRE": "Fecha de resolución :",
                        "VALOR": "2023-02-09"
                        }
                    ],
                    "id": 107,
                    "nombre": "En control interno",
                    "numero": 7,
                    "fecha_inicio": "2023-02-16 20:52:17",
                    "fecha_fin": "2023-02-16 20:54:17",
                    "total_archivos": 0,
                    "aprobados": 0,
                    "observacion": 0,
                    "encargado_revisar": "Secretaria general Uno",
                    "encargado_ejecutar": "Secretaria general Uno",
                    "duracion": 0
                    },
                    {
                    "otros": [
                        {
                        "NOMBRE": "Estado:",
                        "VALOR": "Con datos de diploma"
                        },
                        {
                        "NOMBRE": "Estado de impresión:",
                        "VALOR": "Impreso"
                        },
                        {
                        "NOMBRE": "Libro: ",
                        "VALOR": "2"
                        },
                        {
                        "NOMBRE": "Folio: ",
                        "VALOR": 1
                        },
                        {
                        "NOMBRE": "N° de registro: ",
                        "VALOR": "3"
                        }
                    ],
                    "id": 108,
                    "nombre": "En impresión",
                    "numero": 8,
                    "fecha_inicio": "2023-02-16 20:54:17",
                    "fecha_fin": "2023-02-16 21:19:03",
                    "total_archivos": 0,
                    "aprobados": 0,
                    "observacion": 0,
                    "encargado_revisar": "Secretaria general Uno",
                    "encargado_ejecutar": "Secretaria general Uno",
                    "duracion": 0
                    },
                    {
                    "otros": [
                        {
                        "NOMBRE": "Estado de trámite:",
                        "VALOR": "60 campos generados"
                        },
                        {
                        "NOMBRE": "Estado de impresión:",
                        "VALOR": "Diploma impreso"
                        },
                        {
                        "NOMBRE": "Libro: ",
                        "VALOR": "2"
                        },
                        {
                        "NOMBRE": "Folio: ",
                        "VALOR": 1
                        },
                        {
                        "NOMBRE": "N° de registro: ",
                        "VALOR": "3"
                        },
                        {
                        "NOMBRE": "sticker: ",
                        "VALOR": "123123"
                        },
                        {
                        "NOMBRE": "Estado:",
                        "VALOR": "Enviando a sunedu"
                        }
                    ],
                    "id": 110,
                    "nombre": "Listo para programar entrega y madar a sunedu",
                    "numero": 9,
                    "fecha_inicio": "2023-02-16 21:19:03",
                    "fecha_fin": "2023-02-17 13:48:50",
                    "total_archivos": 0,
                    "aprobados": 0,
                    "observacion": 0,
                    "encargado_revisar": "Secretaria general Uno",
                    "encargado_ejecutar": "Secretaria general Uno",
                    "duracion": 0
                    },
                    {
                    "otros": [
                        {
                        "NOMBRE": "Estado:",
                        "VALOR": "Entrega programada"
                        },
                        {
                        "NOMBRE": "Fecha de entrega: ",
                        "VALOR": "2023-02-17 13:48:00"
                        }
                    ],
                    "id": 111,
                    "nombre": "Programados",
                    "numero": 10,
                    "fecha_inicio": "2023-02-17 13:48:50",
                    "fecha_fin": "2023-02-17 13:48:59",
                    "total_archivos": 0,
                    "aprobados": 0,
                    "observacion": 0,
                    "encargado_revisar": "Secretaria general Uno",
                    "encargado_ejecutar": "Secretaria general Uno",
                    "duracion": 0
                    },
                    {
                    "otros": [
                        {
                        "NOMBRE": "Estado:",
                        "VALOR": "GAME_OVER_TRAMITE"
                        }
                    ],
                    "id": 112,
                    "nombre": "Finalizados",
                    "numero": 11,
                    "fecha_inicio": "2023-02-17 13:48:59",
                    "fecha_fin": "2023-02-17 13:48:59",
                    "total_archivos": 0,
                    "aprobados": 0,
                    "observacion": 0,
                    "encargado_revisar": "Secretaria general Uno",
                    "encargado_ejecutar": "Secretaria general Uno",
                    "duracion": 0
                    }  
                ]
            }           
        }),
        url:'',
      }
    },methods:{
        descargar(){
            this.form.post('/api/download-prueba-reporte',{ headers: {
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