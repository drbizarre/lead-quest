<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title>Lead Quest</title>
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

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '<?php echo $profile->analytics; ?>']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
</head>
<body class="sticky_header1">
<div class="overflow_wrapper">

     <div class="full_page_photo no_photo" style="margin-top:-100px;">
          <div class="hgroup">
               <div class="hgroup_title animated bounceInUp">
                    <div class="container">
                         <h1 class="" align="center">Experimenta el Poder de la Transformación.</h1>
                    </div>
               </div>
               <div class="hgroup_subtitle animated bounceInUp skincolored">
                    <div class="container">
                         <p align="center">Herramientas para el desarrollo de negocio</p>
                    </div>
               </div>
          </div>
     </div>
     <div class="main">
          <div class="container triangles-of-section">
               <div class="triangle-up-left"></div>
               <div class="square-left"></div>
               <div class="triangle-up-right"></div>
               <div class="square-right"></div>
          </div>
          <section class="horizontal_teaser">
               <div class="container">
                    <div class="row">
                         <div class="col-sm-12 col-md-4 horizontal_teaser_left text-center" >
                              <h2>¿Deseas más información?</h3>
                              <p>Es una pagina de apoyo para los empresarios independientes de Lead Quest, creada con el fin de ofrecer un medio sencillo y din&aacute;mico de prospectaci&oacute;n efectiva a nivel profesional, contando con lo ultimo en tecnolog&iacute;a.</p>
                              <img src="<?php echo base_url(); ?>assets/images/blue-right-arrow-md.png" style="display:block; margin:0 auto;">
                         </div>
                         <div class="col-sm-12 col-md-8 horizontal_teaser_right">
                              <iframe width="640" height="360" src="//www.youtube.com/embed/rMfaGMFS8VE?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                         </div>
                    </div>
               </div>
          </section>
          <div class="container">
               <section>
                    <div class="row">
                         <div class="office_address col-sm-6 col-md-4">
                              <div class="team_member">

                                   <h2>Contáctame</h2>
                                   
                                   
                                   
                                   <h4>Phone</h4> <?php echo $profile->phone; ?><br>
                                   <h4>Correo</h4> <a href="mailto:<?php echo $user->email; ?>"><?php echo $user->email; ?></a>  <br> <br>
                                   <h2>Sígueme:</h2>
                                   <?php if (!empty($profile->facebook)) { ?>
                                   <a href="http://www.facebook.com/<?php echo $profile->facebook; ?>" target="_blank"><img src="<?php echo base_url(); ?>assets/images/facebook2.png" title=""></a>
                                   <?php } ?>
                                    <?php if (!empty($profile->youtube)) { ?>
                                   <a href="http://www.youtube.com/<?php echo $profile->youtube; ?>" target="_blank"><img src="<?php echo base_url(); ?>assets/images/youtube33.png"></a>
                                   <?php } ?>
                                   <?php if (!empty($profile->skype)) { ?>
                                   <a href="http://www.skype.com/<?php echo $profile->skype; ?>" target="_blank"><img src="<?php echo base_url(); ?>assets/images/twitter38.png"></a>
                                   <?php } ?>
                              </div>
                         </div>
                         <div class="contact_form col-sm-6 col-md-8">
                              <form name="contact_form" id="contact_form" method="post">
                                 <input type="hidden" id="emailcontact" name="emailcontact" value="<?php echo $profile->emailcontact; ?>">
                                   <div class="row">

                                        <div class="col-sm-6 col-md-6">
                                             <label>Nombre</label>
                                             <input name="name" id="name" class="form-control" type="text" value="">
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                             <label>E-mail</label>
                                             <input name="email" id="email" class="form-control" type="text" value="">
                                        </div>
                                   </div>

                                   <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                             <label>Comentarios</label>
                                             <textarea name="message" id="message" rows="8" class="form-control"></textarea>
                                        </div>
                                        <div class="col-sm-12 col-md-12"><br/>
                                             <a id="submit_btn" class="btn btn-primary" name="submit">Enviar</a> <span id="notice" class="alert alert-warning alert-dismissable hidden" style="margin-left:20px;"></span> </div>
                                   </div>
                              </form>
                         </div>
                    </div>
               </section>
          </div>          
          <br>
          <footer>

               <div class="copyright">
                    <div class="container">
                         <div class="row">
                              
                              
                              <div class="text-center col-sm-12 col-md-12">powered by <a href="http://www.leadquestmarketing.com/"> <img src="<?php echo base_url(); ?>assets/images/LogoLeadQUestW.png" style="vertical-align:middle;"></a> </div>
                         </div>
                    </div>
               </div>
          </footer>
     </div>
  <footer>


     </div>
     <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/twitter-bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
     <!--Pace Page Loader -->
     <script src="<?php echo base_url(); ?>assets/js/pace-0.5.1/pace.min.js"></script>
     <!--FlexSlider -->
     <script src="<?php echo base_url(); ?>assets/js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js"></script>
     <!--Isotope Plugin -->
     <script src="<?php echo base_url(); ?>assets/js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
     <!--To-Top Button Plugin -->
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.ui.totop.js"></script>
     <!--Easing animations Plugin -->
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
     <!--WOW Reveal on scroll Plugin -->
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
     <!--Simple Text Rotator -->
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.simple-text-rotator.js"></script>
     <!--The Theme Required Js -->
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/cleanstart_theme.js"></script>
     <!--To collapse the menu -->
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/collapser.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/contact_form.js"></script>

</div>
</body>
</html>

