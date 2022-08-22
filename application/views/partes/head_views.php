<!DOCTYPE html>
<html>
  <head> 
    <title><?php echo ($titulo);?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Estilos principales(containers, footer)-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/estilo_v3.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/responsive.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/login_util3.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/login_main3.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/estilo_l4.css");?>">

    <!-- estilo catalogo -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/categories_styles.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/categories_responsive.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/js/jquery-ui-1.12.1.custom/jquery-ui.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/core-style.css");?>">
    
    
    <!--estilos contacto-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/contacto_styles.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/contact_responsive.css");?>">
  
    <!-- Bootstrap -->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css");?>">

    <!-- Fonts -->
    <link href="<?php echo base_url("assets/css/font-awesome.min.css");?>" rel="stylesheet" type="text/css">

    <!-- Carrusel -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/OwlCarousel2-2.2.1/owl.carousel.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/OwlCarousel2-2.2.1/owl.theme.default.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/OwlCarousel2-2.2.1/animate.css");?>">    

    <!-- JQuert/JavaScrips(hambruger,carrusel) -->
    <script src="<?php echo base_url("assets/js/jquery-3.3.1.min.js");?>"></script>
    <script src="<?php echo base_url("assets/js/Isotope/isotope.pkgd.min.js");?>"></script>
    <script src="<?php echo base_url("assets/js/jquery-ui-1.12.1.custom/jquery-ui.js");?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.js");?>"></script>
    <script src="<?php echo base_url("assets/OwlCarousel2-2.2.1/owl.carousel.js");?>"></script>
    <script src="<?php echo base_url("assets/js/custom.js");?>"></script>
    <script src="<?php echo base_url("assets/js/categories_custom.js");?>"></script>

    <style>
      .footer {
        background-color: black;
        width: 100%;
        bottom: 0;
      }

    </style>

    <style type="text/css" media="screen">
        a:link {
            color:black;
            text-decoration: none;
        }
        a:hover{
           color: black;
           text-decoration: none;
        }
        a:visited{
            color: black;
            text-decoration: none;
        }
        a:link{
            color: black;
            text-decoration: none;
        }
        input{
            display: block;
            color: white;
            font-size: 14px;
            font-weight: 500;
            line-height: 40px;
        }
        body{
            min-height: 100%;
            top: 0;
            margin:0;
            padding:0;
        }
    </style>

</head>