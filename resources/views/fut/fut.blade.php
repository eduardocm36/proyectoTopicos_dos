
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
</head>
<body>
  <style>
      @font-face {font-family: "English111 Vivace BT"; 
     /* src: url("//db.onlinewebfonts.com/t/6f6b892a1bd21758d3ce6fe690976ec3.eot"); */
      src: local('English111 Vivace BT') ,   
      url("/6f6b892a1bd21758d3ce6fe690976ec3.ttf") format("truetype");
      }
      @page{
          margin: 30px;
          margin-left:110px;
          margin-right:110px;
          padding:0;
          background:rgb(7, 7, 11);
          /* font-family:'English 111 Vivace BT', arial; */
          font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
      .page-break{
          page-break-after: always;
      }
      .img_fondo{
       opacity: 0.5;
       position: absolute;
       width: 500px;
       top: 150;
       left: 50;
       right: 0;
       bottom: 0;
       margin: auto;
       z-index: -4;
      }
      .logo-undac{
        width:55px ;
          float:left; 

      }
      .encabesado{
          text-align: center;
          width:90%;
          float:left; 
          font-size: 18px;
          font-weight: bold;    
          margin-top:0;
          padding-top:0;
          font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
      .encabesado p{
        margin:0;
        padding:0;
        justify-content: start;
        text-align: center;
        
      }
      .titulo{
        font-size:10px;
        padding-top:0px;
        margin-top:2px;
        font-weight: bold;   
        font-family: Arial, Helvetica, sans-serif
      }
      .respuesta{
        margin:0;
        font-weight: none;   
        font-size:11px; 
        margin-bottom:2px;
        font-family: Arial, Helvetica, sans-serif
        
      }
      .cuerpo2tr{
        padding:0px;
        margin:0px;
        font-family: Arial, Helvetica, sans-serif
      }
      .cuerpo2th{
        width:285px;
        text-align:left;
        font-size:11px;
        font-family: Arial, Helvetica, sans-serif;
      }
      .cuadro{
        border-bottom: 1px  dotted ;
        margin-top:10px ;
        font-family: Arial, Helvetica, sans-serif
      }
  </style>

  <div >
    <img class="img_fondo" src="img/fondo_fut.png" alt="">
    
      <img src="img/u.png" alt=""  class="logo-undac">

      <div class="encabesado" >
        <p >UNIVERSIDAD NACIONAL DANIEL ALCIDES CARRIÓN</p> 
        <p >FORMULARIO ÚNICO DE TRAMITE</p> 
      </div>
      <hr style="margin-top:62px;">
      <table>
        <tbody>
          <tr style="margin-top:60px;">
            <td></td>
            <th style="width:350px;" ></th>
            <div style="text-align:initial; font-weight: bold; font-size:12px;
            width:210px;font-family: Arial, Helvetica, sans-serif;
            height:70px">SOLICITO: <p style="font-weight: none">  {{$usuario['sumilla']}} </p> </div>
          </tr>
        </tbody>
      </table>
      <table>
        <tbody>
          <tr style="padding-bottom:120px;">
            <td></td>
            <th style="width:335px;" ></th>
            <th style="text-align:left;font-size:10px;width:190px;font-weight: bold; font-size:12px;">1.  SUMILLA  </th>
          </tr>
        </tbody>
      </table>
      <div style="border-bottom: 1px  dotted ;margin:0px; margin-top:10px">
        <p class="respuesta">{{$usuario['destinatario']}}</p>
      </div>

      <div >
        <p class="titulo">2. DESTINATARIO</p>
        <div style="border-bottom: 1px  dotted ;margin:0px;">
          <p class="respuesta">{{$usuario['nombre']}}</p>
        </div>
      </div>

      <div >
        <p class="titulo">3. DATOS DEL USUARIO (APELLIDOS Y NOMBRES ) </p>
        <div style="border-bottom: 1px  dotted ;margin:0px;">
          <p class="respuesta">{{$usuario['cargo']}}</p>
        </div>
      </div>

      <div >
        <p class="titulo">4. CARGO ACTUAL Y/O CENTRO DE TRABAJO </p>
      </div>

      <table>
        <tbody>
          <tr class="cuerpo2tr"  >
            <th class="cuerpo2th" >
              <div class="cuadro">
                <p class="respuesta" >{{$usuario['dni']}}</p>
              </div>
              5. D.N.I
              
            </th>
            <th class="cuerpo2th">
              <div  class="cuadro">
                <p class="respuesta" >{{$usuario['codigo']}}</p>
              </div>
              6. CÓDIGO DE MATRíCULA
              
            </th>
          </tr>
          <tr class="cuerpo2tr" >
            <th class="cuerpo2th" >
              <div class="cuadro">
                <p class="respuesta">{{$usuario['telefono']}}</p>
              </div>
              7. N° CELULAR/TELF.
              
            </th>
            <th class="cuerpo2th">
              <div class="cuadro">
                <p class="respuesta" >{{$usuario['correo']}}</p>
              </div>
              8. CORREO ELECTRÓNICO
              
            </th>
          </tr>
        </tbody>
      </table>
      <table>
        <tbody>
          <tr >
            <td></td>
            <th style="width:200px;text-align:left;font-size:11px;font-family: Arial, Helvetica, sans-serif;" >
              <div class="cuadro">
                <p class="respuesta" >{{$usuario['facultad']}}</p>
              </div>
              9. FACULTAD
              
            </th>/
            <th style="width:200px;font-size:11px;font-family: Arial, Helvetica, sans-serif;">
              <div class="cuadro">
                <p class="respuesta" >{{$usuario['escuela']}}</p>
              </div>
              ESCUELA PROFESIONAL
                            
            </th>/
            <th style="width:200px;font-size:11px;font-family: Arial, Helvetica, sans-serif;">
              <div class="cuadro">
                <p class="respuesta" >{{$usuario[' ']}}</p>
              </div>
              ESPECIALIDAD
            </th>

          </tr>
        </tbody>
      </table>      
      <div>
        <div class="cuadro">
          <p class="respuesta">{{$usuario['direccion']}}</p>
        </div>
        <p class="titulo">10. DOMICILIO DEL USUARIO (Calle, Distrito, Provincia Y Región) </p> 
      </div>
      <div>
        <div class="cuadro">
          <p class="respuesta"></p>
        </div>
        <p class="titulo">11. FUNDAMENTACIÓN DEL PEDIDO </p> 
      </div> 
      <div style="height:200px;">
        <p style="font-size: 14px;">
          {{$usuario['cuerpo']}}

        </p>
      </div>

      <table>
        <tbody>
          <tr class="cuerpo2tr" >
            <th style="width:280px;text-align:left;font-size:11px;" >
              
              <p> 12. ANEXO: <span style="font-weight: none;  "> {{$usuario['anexo']}}</span></p>
            </th>
            <th style="width:290px;text-align:left;font-size:11px">
              
              <p>13. FECHA: <span style="font-weight: none;">{{$usuario['fecha']}}</span></p>
              
            </th>
          </tr>


          <br>
          <tr class="cuerpo2tr" >
            <th style="width:280px; text-align:left;font-size:11px;" >
              
            </th>
            <th style="width:290px; text-align:left;font-size:11px">
              
              <p>14. FIRMA </p>
              
            </th>
          </tr>

        </tbody>
      </table>


      <hr>

      <div>
        <p class="titulo">FUNDAMENTACIÓN DEL PEDIDO: </p> 
      </div>
      <table>
        <tbody>
          <tr  >
            <th style="width:350px;text-align:left;font-size:11px;" >
              APELLIDOS Y NOMBRES: <span style="font-weight: none;"> {{$usuario['nombre']}}</span>
              
            </th>
            <th style="width:200px;text-align:left;font-size:11px">

              FOLIO: 
      
            </th>
          </tr>
          <tr  >
            <th style="width:350px;text-align:left;font-size:11px" >

              N° DE REGISTRO: 
              
            </th>
            <th style="width:200px;text-align:left;font-size:11px">

              FECHA: <span style="font-weight: none;"> {{$usuario['fecha']}}</span>
              
            </th>
          </tr>
        </tbody>
      </table>

      <table>
        <tbody>
          <tr >
            <td></td>
            <th style="width:200px;font-size:11px;font-family: Arial, Helvetica, sans-serif;" >
              <div class="cuadro">
                <p class="respuesta" >{{$usuario['facultad']}}</p>
              </div>
              FACULTAD
              
            </th>/
            <th style="width:200px;font-size:11px;font-family: Arial, Helvetica, sans-serif;">
              <div class="cuadro">
                <p class="respuesta" >{{$usuario['escuela']}}</p>
              </div>
              ESCUELA PROFESIONAL
                            
            </th>/
            <th style="width:200px;font-size:11px;font-family: Arial, Helvetica, sans-serif;">
              <div class="cuadro">
                <p class="respuesta" >{{$usuario['']}}</p>
              </div>
              ESPECIALIDAD
            </th>

          </tr>
        </tbody>
      </table> 
   
  </div>


</body>
</html>

