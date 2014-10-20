<?php $this->load->view("commons/header"); ?>
<?php 
$membership_selected = $this->session->userdata('membership_selected');
$info_saved = $this->session->userdata('info_saved');
?>
<div class="full_page_photo" style="background-image: url(<?php echo base_url(); ?>assets/images/4.jpg);">
          <div class="hgroup">
               <div class="hgroup_title animated bounceInUp">
                    <div class="container">
                         <h1 class="">Página de Captura</h1>
                    </div>
               </div>
               <div class="hgroup_subtitle animated bounceInUp skincolored">
                    <div class="container">
                         <p>Herramienta para el desarrollo de tu negocio</p>
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
                         <div class="col-sm-12 col-md-12">
<h2 class="section_header elegant centered">Bienvenido <small>a tu nueva página de captura</small></h2>
                <h4>Hola <strong><?php echo $user->firstname . " " . $user->lastname ?></strong>,</h4>
                <p>tu nueva página de captura es:</p>
                <address>
                    <?php echo $profile->virtual_address; ?>
                </address>
                <p><a class="btn btn-primary" href="<?php echo site_url("my-account"); ?>" class="button orange small align">Entrar</a></p>

                         </div>
                    </div>
               </div>
          </section>

                

<?php $this->load->view("commons/footer"); ?>
