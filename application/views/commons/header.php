<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="HandheldFriendly" content="true" />
<meta name="apple-touch-fullscreen" content="yes" />
<!-- All Animations CSS -->
<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css">
<!-- Image Lightbox CSS-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/imagelightbox.css" type="text/css" media="screen">
<!-- Theme styles and Menu styles -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/mainmenu.css" rel="stylesheet" type="text/css">
<!-- Call Fontawsome Icon Font from a CDN -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!--Pace Page Loader -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/pace-0.5.1/themes/pace-theme-minimal.css" type="text/css" media="screen" />
<!--FlexSlider -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/woothemes-FlexSlider-06b12f8/flexslider.css" type="text/css" media="screen">
<!--Isotope Plugin -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/isotope/css/style.css" type="text/css" media="screen">
<!--Simple Text Rotator -->
<link href="<?php echo base_url(); ?>assets/css/simpletextrotator.css" rel="stylesheet" type="text/css">
<!--Style Switcher, You propably want to remove this!-->
<link href="<?php echo base_url(); ?>assets/css/_style_switcher.css" rel="stylesheet" type="text/css">
<!--Modernizer Custom -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.custom.48287.js"></script>
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>apple-touch-fa-57x57-precomposed.html">
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/url3.png">
</head>
<body class="sticky_header">
<div class="overflow_wrapper">
     <header>
          <div class="container">
               <div class="logo"><a class="brand" href="<?php echo site_url(); ?>"> <img src="<?php echo base_url(); ?>assets/images/url3.png" alt="optional logo"> <span class="logo_title">Lead Quest</span></a></div>
               <div id="mainmenu" class="menu_container">
                    <label class="mobile_collapser">MENU</label>
                    <!-- Mobile menu title -->
                    <ul>
                         <li <?php echo ($menu_option=="inicio")?"class=\"active\"":""; ?>><a href="<?php echo site_url(); ?>">Inicio</a></li>
                         <li <?php echo ($menu_option=="sobre-nosotros")?"class=\"active\"":""; ?>><a href="<?php echo site_url("sobre-nosotros"); ?>">Sobre Nosotros</a></li>
                         <li <?php echo ($menu_option=="plan-de-compensacion")?"class=\"active\"":""; ?>><a href="<?php echo site_url("plan-de-compensacion"); ?>">Plan de Compensación</a></li>
                         <li><a target="_blank" href="<?php echo site_url("demo"); ?>">Demo</a></li>
                         <li <?php echo ($menu_option=="registro")?"class=\"active\"":""; ?>><a href="<?php echo site_url("registro"); ?>">Ingresar</a></li>
                         <li <?php echo ($menu_option=="contacto")?"class=\"active\"":""; ?>><a href="<?php echo site_url("contacto"); ?>">Contacto</a></li>
                    </ul>
               </div>
               <div class="triangle-up-left"></div>
               <div class="triangle-up-right"></div>
          </div>
     </header>