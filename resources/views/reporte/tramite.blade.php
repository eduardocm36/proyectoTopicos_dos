<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        #reporte .encabezado{
            margin-top: -35px;
        } 
   
        #reporte{
            margin-left:15px ;
            margin-right:15px ;

        }
        #reporte .encabezado .logo img {
          width: 50px;
        }
        #reporte{
            font-family: Helvetica, Arial, sans-serif;
        }
    </style>
<div id="reporte">
    <!-- encabezado -->
    <div class="encabezado">
        <table>
            <tr>
                <th>
                    <div class="logo">
                        <img src="img/u.png">
                    </div>
                </th>
                <th>
                <div style="width:90%">
                    <h1 style="text-align:center; font-size:22px;">"UNIVERSIDAD NACIONAL DANIEL ALCIDES CARRIÓN"</h1>
                    <p style="text-align:center; font-size:18px;">Información del tramite</p>
                </div>
                </th>
            </tr>
        </table>

    </div>
    <!-- datos del alumno -->
    <div class="datosAlum">
        <table >
            <tr >
                <td style="width:450px"><p ><strong>Nombre:</strong>{{$tramite['per_nom']}}</p></td>
                <td><p ><strong>Codigo:</strong>{{$tramite['cod_alumno']}}</p></td>
            </tr>
            <tr >
                <td style="width:450px"><p ><strong>Tramite:</strong>{{$tramite['tramite']}}</p></td>
                <td><p ><strong>Egreso:</strong>{{$tramite['egreso']}}</p></td>
            </tr>
        </table>
       
    </div>
    <br>
    <!-- cuadro de fases -->
    <div class="fases">
        <table>
            <thead>
                <tr style="background:#F3F3F3; color:black">
                    <th >
                        Nº Fase
                    </th>
                    <th >
                        Doc observados
                    </th>
                    <th >
                        Doc aprobados 
                    </th>
                    <th >
                        Otras observaciones
                    </th>
                    <th >
                        Fecha inicio y fin
                    </th>
                    <th >
                        Duración dias
                    </th>
                </tr>
            </thead>
            <tbody style="text-align: center; font-size:10px;">
                @foreach( $tramite['fases'] as $fase)
                <tr>
                    <td  style="font-size:10px;" >{{$fase['numero']}}</td>
                    <td style="font-size:10px;">{{$fase['observacion']}}</td>
                    <td style="font-size:10px;">{{$fase['aprobados']}}</td>
                    <td style="text-align: left">
                        @if(count($fase['otros'])>0)
                        <div>
                            @foreach($fase['otros'] as $otro)
                            <div >
                                    <span style="font-size:10px;" >{{$otro['NOMBRE']}}</span>
                                    @if($otro['VALOR']=='GAME_OVER_TRAMITE')
                                        <span style="font-size:10px;" >Tramite terminado</span>
                                    @endif
                                    <span v-else style="font-size:10px;" >{{$otro['VALOR']}}</span>                     
                            </div>
                            @endforeach
                        </div> 
                        @endif
                    </td>
                    <td>
                        <span style="font-size:10px;">{{$fase['fecha_inicio']}}</span>
                        <br>
                        <span style="font-size:10px;">{{$fase['fecha_fin']}}</span>
                        
                    </td>
                    <td style="font-size:10px;">{{$fase['duracion']}}</td> 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
</body>
</html>