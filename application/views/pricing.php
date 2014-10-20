<?php $this->load->view("commons/header"); ?>
  
<!-- page title -->
    <div class="page-main-title">

        <div class="leaft-title"><h1>Precios</h1></div>
        <span class="reght-pagenation"><a href="<?php echo site_url(); ?>">Home</a> <i>/ </i> Precios</span>

    </div><!-- end copyright info -->

<!-- Content
======================================= -->  
<div id="content">
    <div class="container">
    
        <!-- content left area -->
        <div class="content-left">
          <div class="pricing-tables-main">
            
            <h2>Elige el tipo de membresía</h2>
            
            <div class="clearfix"><p></p></div>
            
            <div class="pricing-tables">
                <div class="title">Mensual</div>
                <div class="price">$14.99 <i>/ por mes</i></div>
                <div class="cont-list">
                    <ul>
                        <li>Registro</li>
                        <li>Membresía</li>
                        <li>Duplicador Digital</li>
                        <li class="last">soporte técnico</li>
                    </ul>
                </div>
                <div class="ordernow"><a href="<?php echo site_url("new-account/monthly"); ?>" class="button darkgray small align">Ordénalo Ahora</a></div>
            </div><!-- end section -->
            
            <div class="pricing-tables-helight">
                <div class="title">Anual</div>
                <div class="price">$150 <i>/anual</i></div>
                <div class="cont-list">
                    <ul>
                        <li>Registro</li>
                        <li>Membresía</li>
                        <li>Duplicador Digital</li>
                        <li class="last">soporte técnico</li>
                    </ul>
                </div>
                <div class="ordernow"><a href="<?php echo site_url("new-account/annual"); ?>" class="button red small colorchan">Ordénalo Ahora</a></div>
            </div><!-- end section -->
                        
            <div class="pricing-tables">
                <div class="title">Semestral</div>
                <div class="price">$75<i>/semestral</i></div>
                <div class="cont-list">
                    <ul>
                        <li>Registro</li>
                        <li>Membresía</li>
                        <li>Duplicador Digital</li>
                        <li class="last">soporte técnico</li>
                    </ul>
                </div>
                <div class="ordernow"><a href="<?php echo site_url("new-account/semestral"); ?>" class="button darkgray small align">Ordénalo Ahora</a></div>
            </div><!-- end section -->
            <div class="clearfix"><p></p></div>
              <div class="clearfix"><p></p></div>
                <div class="clearfix"><p></p></div>
<h2 id="beneficios">Beneficios de Duplicador Digital</h2>
<p>Al convertirte en Empresario Independiente de NuVi Global tendrás la oportunidad de poder distribuir productos de alta calidad que ayudarán a mejorar la salud de tus clientes, familia y amigos,  además, de iniciar un negocio independiente que tiene la capacidad de proyectar tu economía a nuevos niveles.</p>
<p>Para poder acelerar este proceso, NuVi Global a creado este sistema único en su clase, el cual te permitirá de una manera sencilla el poder pasar el mensaje de salud de Nuvi Global de una forma masiva…</p>
<p>Hoy en día estamos viviendo una era de avances tecnológicos, 78% de las personas utilizan teléfonos  “inteligentes”, gracias a este factor, podemos llegar a todas estas personas de una manera ¡sencilla, moderna y eficaz!</p>
<p>La pagina de captura de NuVi Global ha sido creada para apoyarte a alcanzar personas de una manera mas rápida y efectiva, solamente regístrate, pon tu información personal y ¡envía el link de tu pagina de captura a todos tus contactos!</p>
<p>Los interesados te contactaran por el medio de su preferencia, ya sea Facebook, twitter, Skype, o correo electrónico.</p>
<p>Lo único que tienes que hacer de después de esto es compartir el mensaje de salud y bienestar de NuVi a tus prospectos y de esa manera, ¡tendrás nuevos distribuidores en tu línea de negocio!</p>
           </div><!-- end pricing tables --> 
        </div><!-- end content left area -->


        <?php 
        if (empty($user)) {
            $this->load->view("commons/right-sidebar");
        }else{
            $this->load->view("commons/dashboard-menu");
        }

        ?>

    </div>
</div>

<?php $this->load->view("commons/footer"); ?>
</body>
</html>