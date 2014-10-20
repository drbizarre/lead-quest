<!DOCTYPE html>
<html>
  <head>
    <title>Lead Quest</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS Files comes here -->
    <link href="http://www.nuvinoticias.com/demo/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="http://www.nuvinoticias.com/demo/css/style.css" rel="stylesheet" media="screen">
    <link href="http://www.nuvinoticias.com/demo/css/animate.css" rel="stylesheet" media="screen">
    <link href="http://www.nuvinoticias.com/demo/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="http://www.nuvinoticias.com/demo/css/owl.theme.css" rel="stylesheet" media="screen">
    <link href="http://www.nuvinoticias.com/demo/css/nivo-lightbox.css" rel="stylesheet" media="screen">
    <link href="http://www.nuvinoticias.com/demo/css/nivo_lightbox_themes/default/default.css" rel="stylesheet" media="screen">
    <link href="http://www.nuvinoticias.com/demo/css/colors/green.css" rel="stylesheet" media="screen">
    <link href="http://www.nuvinoticias.com/demo/css/responsive.css" rel="stylesheet" media="screen">
    
    <!-- Google fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic" rel="stylesheet" type="text/css">
    
    <!-- Modernizer and IE specyfic files -->  
    <script src="http://www.nuvinoticias.com/js/modernizr.custom.js"></script>
      
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://www.nuvinoticias.com/demo/js/html5shiv.js"></script>
      <script src="http://www.nuvinoticias.com/demo/js/respond.min.js"></script>
    <![endif]-->
    
    <!--[if IE 9]>
     <link href="http://www.nuvinoticias.com/demo/css/ie.css" rel="stylesheet" media="screen">
    <![endif]-->
    
    <link href="http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,300,800" rel="stylesheet" type="text/css">
    <!-- END Switcher Styles -->
    
    <!-- Demo Examples -->
    <link rel="alternate stylesheet" type="text/css" href="http://www.nuvinoticias.com/demo/css/colors/green.css" title="green" media="all" />

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
  

  <body>

    <!--###############################-->
    <!--PRELOADER #####################-->
    <!--###############################-->
    
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>


    <!--###############################-->
    <!--HOME ##########################-->
    <!--###############################-->

    <section id="home">
    <div class="container">
        <div class="row">
            <div id="homescreen" class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                 <div id="slogan"><h1>¿Conoces a alguna persona que quiera mejorar su salud y estilo de vida de una manera sencilla y natural?</h1></div>
                 <a id="video" href="http://www.nuvinoticias.com/demo/video.html" data-lightbox-type="iframe"><img alt="img" id="home_image" class="img-responsive animated fadeInUp" src="http://www.nuvinoticias.com/demo/images/homescreen.jpg"></a>
                  <img class="img-responsive" id="button_download" src="http://www.nuvinoticias.com/demo/images/request-an-information-pack.png" style="display:block; margin: 0px auto 20px auto; cursor:pointer;">
            </div> <div class="clearfix"></div>
        </div>
    </div>
    </section>
    
    
    <!--###############################-->
    <!--ABOUT #########################-->
    <!--###############################-->
    
    <section id="about">
        <div class="container">
            
            <div class="row" id="about_intro">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" >
                    
                    <h2>Call: <?php echo $profile->phone; ?></h2>
                    <h3>Escríbeme: <?php echo $user->email; ?></h3>
                    <?php if (!empty($profile->youtube) && !empty($profile->facebook) && !empty($profile->skype)) { ?>
                    <h4>tambien puedes seguirme en:</h4>
                    <?php } ?>
                    
                </div>
            </div>
            <?php 
            $counter = 0;
            if (!empty($profile->youtube)) {
                $counter++;
            }
            if (!empty($profile->facebook)) {
                $counter++;
            } 
            if (!empty($profile->skype)) {
                $counter++;
            } 
            if ($counter==3) {
                $col="4";
            }
            if ($counter==2) {
                $col="6";
            }
            if ($counter==1) {
                $col="12";
            }            
            if ($counter==0) {
                $cola="style=\"display:none;\"";
            }else{
                $cola = "";
            }
            ?>
            <div class="row" <?php echo $cola; ?>>
                
                <div class="col-sm-4 col-md-2 col-lg-2 col-md-offset-3 col-lg-offset-3" id="service_1">
                    <?php if (!empty($profile->youtube)) { ?>
                    <a href="<?php echo $profile->youtube; ?>" target="_blank">
                    <img src="http://www.nuvinoticias.com/demo/images/1403596352_youtube.png" class="services_icon" />
                    
                    <h3>Suscríbete</h3>
                    <p>ver videos de mi experiencia</p>
                    </a>
                    <?php } ?>
                </div>
                
                <div class="col-sm-4 col-md-2 col-lg-2" id="service_2">
                    <?php if (!empty($profile->facebook)) { ?>
                    <a href="<?php echo $profile->facebook; ?>" target="_blank">
                    <img src="http://www.nuvinoticias.com/demo/images/1403596369_facebook.png" class="services_icon" />
                    <h3>Sígueme</h3>
                    <p>entérate minuto a minuto</p>
                    </a>
                    <?php } ?>
                </div>
                
                <div class="col-sm-4 col-md-2 col-lg-2" id="service_3">
                    <?php if (!empty($profile->skype)) { ?>
                    <a href="skype:<?php echo $profile->skype; ?>?call" target="_blank">
                    <img src="http://www.nuvinoticias.com/demo/images/1403596528_skype_circle_color.png" class="services_icon" />
                    <h3>Agrégame</h3>
                    <p>disponible 24/7</p>
                    </a>
                    <?php } ?>
                </div>
                
            </div>
    
        </div>
    </section>
    
    
   
    <!--###############################-->
    <!--Newsletter and Footer #########-->
    <!--###############################-->
    
    <section id="footer">
        <div class="container">
            <div class="row" id="newsletter">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" >
                    
                    <h2>¡Si! Quiero mayor información</h2>
                    <p>Por favor llena el siguiente formulario.
                    </p>
                    
                    <div id="newsletter_form">
                        <div id="form-main">
                            <div id="form-div">
                                <form class="form" id="form1" action="http://www.nuvinoticias.com/mailer/sender.php" method="post">
                                  <input type="hidden" id="emailcontact" name="emailcontact" value="<?php echo $profile->emailcontact; ?>">
                                  <p class="name">
                                    <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
                                  </p>
                                  
                                  <p class="email">
                                    <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                                  </p>

                                  <p class="phone">
                                    <input name="phone" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Teléfono Móvil" id="phone" />
                                  </p>

                                  <p class="country">
                                    <input name="country" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="País ó Estado" id="country" />
                                  </p>
                                  <div class="submit">
                                    <input type="submit" value="ENVIAR" id="button-blue"/>
                                    <div class="ease"></div>
                                  </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                       
               <div class="row">
                   <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1" id="share">
                       <p><img src="http://www.nuvinoticias.com/demo/images/Innova-logo.png"><br>Copyright &copy; 2014 Innova</p>
                   </div>
               </div>
            </div>
            <div class="row" id="preview" style="opacity:0;"></div>    
        </div>
    </section>
    
   
    <!-- JavaScript plugins comes here -->
    <script src="http://www.nuvinoticias.com/demo/js/jquery-2.0.3.min.js"></script>
    <script src="http://www.nuvinoticias.com/demo/js/jquery.easing.min.js"></script>
    <script src="http://www.nuvinoticias.com/demo/js/jquery.scrollTo.js"></script>
    <script src="http://www.nuvinoticias.com/demo/js/jquery.form.js"></script>
    <script src="http://www.nuvinoticias.com/demo/js/main.js"></script>
    <script src="http://www.nuvinoticias.com/demo/js/retina.js"></script>
    <script src="http://www.nuvinoticias.com/demo/js/waypoints.min.js"></script>
    <script src="http://www.nuvinoticias.com/demo/js/owl.carousel.min.js"></script>
    <script src="http://www.nuvinoticias.com/demo/js/nivo-lightbox.min.js"></script>
    <script type="text/javascript">
        $('document').ready(function(){
                
                $('#form1').ajaxForm( {
                target: '#preview',
                success: function() { 
                      $('#newsletter').slideUp('slow');
                      $('#preview').css({"opacity":"1"});
                    }
                });
            });
    </script>

    

    
  </body>
</html>