<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">

        <title>WebGL</title>
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
  
        <script src="<?php echo base_url('assets/js/three.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/GLTFLoader.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/WebGL.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/stats.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/prueba.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/THREEx.WindowResize.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/OrbitControls.js') ?>"></script> 


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
        </style>
    </head>


<body>
  	<nav class="lime darken-3" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="<?php echo base_url();?>" class="brand-logo">Dispostivos RA</a>

            <ul class="right hide-on-med-and-down">
                
                  <li><a href="<?php echo base_url();?>saludo" >Acerca de</a></li>              
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="<?php echo base_url();?>saludo" >Acerca de</a></li>
            </ul>

            <a href="<?php echo base_url();?>" data-activates="nav-mobile" class="button-collapse">
                <i class="mdi-navigation-menu"></i>
            </a>
        </div>
    </nav>

  