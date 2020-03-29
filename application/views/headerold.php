<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">

        <title>ICO</title>
        <link rel="icon" href="<?php echo base_url('assets/img/icono.ico')?>">
        <meta name="description" content="">

        <!--Imported CSS Links-->
        <link href="<?php echo base_url('assets/css/materialize.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/aos.css') ?>" rel="stylesheet">


        <!--Imported JS Links-->
        <script src="<?php echo base_url('assets/js/jquery-2.1.10.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery-ui-1.10.4.custom.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.validate.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/additional-methods.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/form-validation.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/aos.js') ?>"></script>
       


        <style>
          html, body, .block {
            height: 100%;
            }
          nav ul li a:hover, nav ul li a.active {
            background-color: rgba(0,0,0,.1);
            }
          footer {
            padding-left: 0;
            }
          .row {
            padding:0px;
            }


            .boton{
border-radius: 200px 0px 200px 200px;
-moz-border-radius: 200px 0px 200px 200px;
-webkit-border-radius: 200px 0px 200px 200px;
border: 0px solid #000000;
}

.blockquote_naranja {
  border-left-color: #FFF;
}

.blockquote_blanco {
  border-left-color: #E8762A;
}

.dropbtnp {
  background-color: #fff;
  color: black;
 border-radius: 0px 200px 200px 200px;
-moz-border-radius: 0px 200px 200px 200px;
-webkit-border-radius: 0px 200px 200px 200px;
border: 0px solid #000000;
border: #E8762A 1px solid;
}


button.dropbtnp {
  background-color: #fff;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

button.dropbtnp:hover{
  background-color: #fff;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border: #E8762A 1px solid;
}

.dropdownp {
  position: relative;
  display: inline-block;

}


.dropdownp-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 300px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;


border-radius: 0px 0px 0px 20px;
-moz-border-radius: 0px 0px 0px 20px;
-webkit-border-radius: 0px 0px 0px 20px;
border: 0px solid #000000;
}

.dropdownp-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;

}

.dropdownp-content a:hover {
  background-color: #ccc;
}

.dropdownp:hover .dropdownp-content {
  display: block;
}

.dropdownp:hover .dropbtn {
  background-color: #3e8e41;
}

.dropbtnq {
  background-color: #fff;
  color: black;
 border-radius: 0px 200px 200px 200px;
-moz-border-radius: 0px 200px 200px 200px;
-webkit-border-radius: 0px 200px 200px 200px;
border: 0px solid #000000;
border: #ccc 1px solid;
}


button.dropbtnq {
  background-color: #fff;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

button.dropbtnq:hover{
  background-color: #fff;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border: #ccc 1px solid;
}


.dropdownq {
  position: relative;
  display: inline-block;
}


.dropdownq-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdownq-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdownq-content a:hover {background-color: #f1f1f1;}

.dropdownq:hover .dropdownp-content {
  display: block;
}

.dropdownq:hover .dropbtn {
  background-color: #3e8e41;
}


/*Eliminar*/

.colorfes{
  background-color: #E8762A;
}



/* just for jsfiddle */
@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: local('Material Icons'), local('MaterialIcons-Regular'), url(https://fonts.gstatic.com/s/materialicons/v18/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2');
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -moz-font-feature-settings: 'liga';
  -moz-osx-font-smoothing: grayscale;
}

.middle-indicator{
   position:absolute;
   top:50%;
   }
  .middle-indicator-text{
   font-size: 4.2rem;
  }
  a.middle-indicator-text{
    color:white !important;
  }
.content-indicator{
    width: 64px;
    height: 64px;
    background: none;
    -moz-border-radius: 50px;
    -webkit-border-radius: 50px;
    border-radius: 50px; 
  }
    .indicators{
    visibility: hidden;
  }


.contenidomenu{
  color: black;
  font-size: 15px;

}

.desplegable{
  background-color: #fff;
  text-align: center;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border: #E8762A 1px solid;
  border-radius: 0px 0px 0px 20px;
  -moz-border-radius: 0px 0px 0px 20px;
  -webkit-border-radius: 0px 0px 0px 20px;
}

.active, .desplegable:hover {
  background-color: white;
}

.desplegable:after {
  content: '';
  font-weight: bold;
  float: left;
  margin-right: 5px;
}


.desplegabledos {
  background-color: #fff;
  color: black;
  text-align: center;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border: #ccc 1px solid;
  border-radius: 0px 0px 0px 20px;
  -moz-border-radius: 0px 0px 0px 20px;
  -webkit-border-radius: 0px 0px 0px 20px;
}

.active, .desplegabledos:hover {
  background-color: white;
}

.desplegabledos:after {
  content: '';
  font-weight: bold;
  float: left;
  margin-right: 5px;
}


.active:after {
  content: "";
}

.contenido {
  padding: 0 18px;
  max-height: 0;
  font-size: 16px;
  text-align: center;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: white;
}

.desplegableicono {
  background-color: white;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .desplegableicono:hover {
  background-color: white;
}

.desplegableicono:after {
  content: '';
  color: black;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "";
}

.contenidoicono {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: white;
}

.sindesplegable{
  text-align: center;
  font-size: 16px;
}

.logoizquierda{
padding-left: 30px;
float: left;
}
.logoderecha{
  padding-right: 30px;
  float: right;
}


.mySlides{
  display:none;
}


.mySlidesPeque{
  display:none;
}

.page-footer{
  background-color: #E8762A !important;
  font-size: 15px;
}

        </style>



    </head>
    <body>
	






<!--logos pequeños centrados-->
<div class="row hide-on-large-only">   
      <div class="logoizquierda"><ul><img src="assets/img/logos/logofesaragonpeque.png" width="320" height="100"></ul></div> 
      <div class="logoderecha"><ul><img src="assets/img/logos/logoicopeque.png" width="320" height="100"></ul></div>          
</div>
<!--logos pequeños centrados-->








<!-- barra logos y menu -->
<div class="row hide-on-med-and-down">
      <div class="col s2 m2 l2"><ul class="left"><img class="logoizquierda" src="assets/img/logos/logofesaragon.png" width="250" height="60"></ul></div>        

<!-- menu interior centrado -->
<div class="col s8 m8 l8 center-align hide-on-med-and-down">  
  <div><p></p></div>

   
<div class="dropdownp center-align red">
  <button class="dropbtnp">Quienes Somos</button>
  <div class="dropdownp-content" style="left:0;">
        <a href="http://ingenieria.aragon.unam.mx/quienes/mision.rb">Misión</a>
        <a href="http://ingenieria.aragon.unam.mx/quienes/vision.rb">Visión</a>
        <a href="http://ingenieria.aragon.unam.mx/quienes/objetivos.rb">Objetivo</a>
        <a href="http://ingenieria.aragon.unam.mx/quienes/valores.rb">Valores</a>
  </div>
</div>


<div class="dropdownq">
  <button class="dropbtnq center-align">Plan de estudios</button>
  <div class="dropdownp-content" style="left:0;">
        <a href="http://ingenieria.aragon.unam.mx/estudios/perfil_ingreso.rb">Perfil de Ingreso</a>
        <a href="http://ingenieria.aragon.unam.mx/estudios/perfil_egreso.rb">Perfil de Egreso</a>
        <a href="http://ingenieria.aragon.unam.mx/estudios/cuestionario_plan_estudios.rb">Cuestionario Plan de Estudios</a>
        <a href="http://ingenieria.aragon.unam.mx/estudios/mapacurricular1279.html">Mapa Curricular Vigente (Cve:1279)</a>
        <a href="http://ingenieria.aragon.unam.mx/estudios/mapacurricular0082">Mapa Curricular Anterior (Cve:0082)</a>
  </div>
</div>


<div class="dropdownp center-align">
  <button class="dropbtnp">Alumnos</button>
  <div class="dropdownp-content" style="left:0;">
        <a href="http://ingenieria.aragon.unam.mx/alumnos/calendario_escolar.rb">Calendario Escolar</a>
        <a href="http://ingenieria.aragon.unam.mx/horariosico">Horarios de Clase</a>
        <!--<a href="http://ingenieria.aragon.unam.mx/alumnos/horarios_clase.rb">Horarios de Clase</a>-->
        <a href="http://ingenieria.aragon.unam.mx/ico/alumnos/laboratorios.rb">Horarios de Laboratorio</a>
        <a href="http://ingenieria.aragon.unam.mx/alumnos/examenes_extraordinarios.rb">Exámenes Extraordinarios</a>
        <a href="http://ingenieria.aragon.unam.mx/alumnos/tutores.rb">Tutores</a>
        <a href="http://ingenieria.aragon.unam.mx/alumnos/evaluacion_profesores.rb">Evaluación de Profesores</a>
  </div>
</div>


<div class="dropdownq center-align">
  <button class="dropbtnq">Profesores</button>
  <div class="dropdownp-content" style="left:0;">
        <a href="http://www.paginaspersonales.unam.mx/presentacions" target="_blank">Páginas Personales</a>
        <a href="http://ingenieria.aragon.unam.mx/files/profesores/peticion_bibliografia.pdf" target="_blank">Material Bibliográfico</a>
        <a href="http://ingenieria.aragon.unam.mx/profesores/competencias.rb">Competencias</a>
  </div>
</div>


<div class="dropdownp center-align">
  <button class="dropbtnp">Egresados</button>
  <div class="dropdownp-content" style="left:0;">
        <a href="http://ingenieria.aragon.unam.mx/egresados/ofertas.rb">Ofertas de Trabajo</a>
        <a href="http://ingenieria.aragon.unam.mx/egresados/curso_examen_posgrado.rb">Curso Examen Posgrado</a>
        <a href="http://ingenieria.aragon.unam.mx/alumnos/diplomados.rb">Diplomados</a>
        <a href="http://ingenieria.aragon.unam.mx/egresados/modalidades.rb">Modalidades de Titulación</a>
        <a href="http://ingenieria.aragon.unam.mx/sse/" target="_blank">Seguimiento a Egresados</a>
  </div>
</div>


<div class="dropdownq center-align">
  <button class="dropbtnq">Ligas de Interés</button>
  <div class="dropdownp-content" style="left:0;">
        <a href="http://www.conectamx.com.mx/" target="_blank">Emprendimiento</a>
        <a href="http://ingenieria.aragon.unam.mx/enlaces/cultura_informatica.rb" target="_blank">Cultura Inform&aacute;tica</a>
        <a href="http://www.tic.unam.mx/software.html" target="_blank">Hardware y Software</a>
        <a href="http://132.247.154.154:8991/F" target="_blank">Biblioteca en L&iacute;nea</a>
        <a href="http://www.serviciosocial.unam.mx/" target="_blank">Servicio Social</a>
        <a href="http://www.becarios.unam.mx/portal/" target="_blank">Becas</a>  
  </div>
</div>

<div></div>

</div>
<!-- menu interior centrado -->

   <div class="col s2 m2 l2 hide-on-med-and-down"><ul class="right"><img class="logoderecha" src="assets/img/logos/logoico.png" width="250" height="60"></ul></div>        

</div>
<!-- barra logos y menu -->


<!-- menu pequeño set -->

<p class="desplegableicono hide-on-large-only">

  <div class="contenidoicono">


    <p class="sindesplegable">Inicio</p>
    
    <p class="desplegable">Quienes Somos</p>
    <div class="contenido">
        
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/quienes/mision.rb">Misión</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/quienes/vision.rb">Visión</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/quienes/objetivos.rb">Objetivo</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/quienes/valores.rb">Valores</a><br>  
    </div>

    <p class="desplegabledos">Plan de Estudios</p>
    <div class="contenido">    
        
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/estudios/perfil_ingreso.rb">Perfil de Ingreso</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/estudios/perfil_egreso.rb">Perfil de Egreso</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/estudios/cuestionario_plan_estudios.rb">Cuestionario Plan de Estudios</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/estudios/mapa_curricular_vigente.rb">Mapa Curricular Vigente (Cve:1279)</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/estudios/mapa_curricular_anterior.rb">Mapa Curricular Anterior (Cve:0082)</a><br>
    </div>

      <p class="desplegable">Alumnos</p>
    <div class="contenido">
    
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/alumnos/calendario_escolar.rb">Calendario Escolar</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/horariosico">Horarios de Clase</a><br>
        <!--<a href="http://ingenieria.aragon.unam.mx/alumnos/horarios_clase.rb">Horarios de Clase</a>-->
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/ico/alumnos/laboratorios.rb">Horarios de Laboratorio</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/alumnos/examenes_extraordinarios.rb">Exámenes Extraordinarios</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/alumnos/tutores.rb">Tutores</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/alumnos/evaluacion_profesores.rb">Evaluación de Profesores</a><br>

    </div>

    <p class="desplegabledos">Profesores</p>
    <div class="contenido">
    

      <a class="contenidomenu" href="http://www.paginaspersonales.unam.mx/presentacions" target="_blank">Páginas Personales</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/files/profesores/peticion_bibliografia.pdf" target="_blank">Material Bibliográfico</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/profesores/competencias.rb">Competencias</a><br>


    </div>

    <p class="desplegable">Egresados</p>
    <div class="contenido">
   
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/egresados/ofertas.rb">Ofertas de Trabajo</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/egresados/curso_examen_posgrado.rb">Curso Examen Posgrado</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/alumnos/diplomados.rb">Diplomados</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/egresados/modalidades.rb">Modalidades de Titulación</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/sse/" target="_blank">Seguimiento a Egresados</a><br>


    </div>


    <p class="desplegabledos">Ligas de Interes</p>
    <div class="contenido">


        <a class="contenidomenu" href="http://www.conectamx.com.mx/" target="_blank">Emprendimiento</a><br>
        <a class="contenidomenu" href="http://ingenieria.aragon.unam.mx/enlaces/cultura_informatica.rb" target="_blank">Cultura Inform&aacute;tica</a><br>
        <a class="contenidomenu" href="http://www.tic.unam.mx/software.html" target="_blank">Hardware y Software</a><br>
        <a class="contenidomenu" href="http://132.247.154.154:8991/F" target="_blank">Biblioteca en L&iacute;nea</a><br>
        <a class="contenidomenu" href="http://www.serviciosocial.unam.mx/" target="_blank">Servicio Social</a><br>
        <a class="contenidomenu" href="http://www.becarios.unam.mx/portal/" target="_blank">Becas</a><br> 
    </div>


    <p><br><br><br><br><br><br></p>

</div>
<!-- fin menu pequeño set -->



<div><br></div>














 
  </nav>

  