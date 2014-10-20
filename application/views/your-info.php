<?php $this->load->view("commons/header"); ?>
<?php 
$membership_selected = "free";
            $firstname          = $this->session->userdata('firstname');
            $lastname           = $this->session->userdata('lastname');
            $email              = $this->session->userdata('email');
            $password           = $this->session->userdata('password');
            $emailcontact = $this->session->userdata('emailcontact');
            $phone  = $this->session->userdata('phone');
            $facebook   = $this->session->userdata('facebook');
            $skype   = $this->session->userdata('skype');
            $youtube     = $this->session->userdata('youtube');
            


$info_saved = $this->session->userdata('info_saved');
?>
 <div class="full_page_photo" style="background-image: url(<?php echo base_url(); ?>assets/images/3.jpg);">
          <div class="hgroup">
               <div class="hgroup_title animated bounceInUp">
                    <div class="container">
                         <h1 class="">Registro</h1>
                    </div>
               </div>
               <div class="hgroup_subtitle animated bounceInUp skincolored">
                    <div class="container">
                         <p>Infomación General.</p>
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
<?php echo validation_errors(); ?> 
                    <?php
                    if (isset($info_saved) && $info_saved=="yes") {
                        if (isset($custom_message) && $custom_message=="success"){
                            echo "<div class=\"success\" id=\"div2\">
                    <div class=\"message-box-wrap\">
              <button id=\"colosebut2\" class=\"close-but\">close</button> <strong>Información correctamente grabada</strong> nombre de usuario disponible. continua.</div>
                </div>";
                        }
                    }                    
                    ?>                
                <h2 class="section_header elegant centered">Información de usuario <small>Datos Generales</small></h2>
                 
                <div class="divider-line2_form"></div>
                <form action="<?php echo site_url("save-your-information"); ?>" method="post" id="info-user-form">
                    <fieldset style="margin-bottom:40px;">
                        <div><label for="firstname" class="blocklabel_form">Nombre</label><input name="firstname" class="form-control" type="text" id="firstname" value='<?php echo (!empty($firstname))?$firstname:set_value('firstname'); ?>' placeholder="Escribe tu nombre" /></div>
                        <div><label for="lastname" class="blocklabel_form">Apellido</label><input name="lastname" class="form-control" type="text" id="lastname" value='<?php echo (!empty($lastname))?$lastname:set_value('lastname'); ?>' placeholder="Escribe tu apellido" /></div>
                        <div><label for="email" class="blocklabel_form">leadquestmarketing.com/</label><input name="email" class="form-control" type="text" id="email" value='<?php echo (!empty($email))?$email:set_value('email'); ?>' placeholder="nombre de usuario" /> &nbsp; <!--small><a id="tips" href="#modal2">tips de creación de usuario <img src="<?php echo base_url(); ?>assets/images/info6.png" style="vertical-align:middle;"></a></small--></div>
                        <div><label for="password" class="blocklabel_form">Contraseña</label><input name="password" class="form-control" type="password" id="password" value='<?php echo (!empty($password))?$password:set_value('password'); ?>'/></div>
                    </fieldset>

                <h2 class="section_header elegant centered">Información de contácto <small>Informació que se vera reflejada en tu página de captura</small></h2>
                <div class="divider-line2_form"></div>
                    <fieldset style="margin-bottom:40px;">
                        <div><label for="emailcontact" class="blocklabel_form">Correo Electrónico</label><input name="emailcontact" class="form-control" type="text" id="emailcontact" value='<?php echo (!empty($emailcontact))?$emailcontact:set_value('emailcontact'); ?>' placeholder="correo electrónico donde te contactarán" /></div>
                        <div><label for="phone" class="blocklabel_form">Teléfono</label><input name="phone" class="form-control" type="text" id="phone" value='<?php echo (!empty($phone))?$phone:set_value('phone'); ?>'/></div>
                        <div><label for="facebook" class="blocklabel_form">Facebook</label><input name="facebook" class="form-control" type="text" id="facebook" value='<?php echo (!empty($facebook))?$facebook:set_value('facebook'); ?>' placeholder="URL hacia tu perfil ó fanpage" /></div>
                        <div><label for="skype" class="blocklabel_form">Skype</label><input name="skype" class="form-control" type="text" id="skype" value='<?php echo (!empty($skype))?$skype:set_value('skype'); ?>' placeholder="usuario de skype" /></div>
                        <div><label for="youtube" class="blocklabel_form">Youtube</label><input name="youtube" class="form-control" type="text" id="youtube" value='<?php echo (!empty($youtube))?$youtube:set_value('youtube'); ?>' placeholder="URL hacia tu video ó canal de youtube" /></div>
                    </fieldset>
                
                <div class="divider-line2_form"></div>
                <p><input type="submit" class="btn btn-primary" value="Grabar información"></p>
                </form>
                         </div>
  
                    </div>
               </div>
          </section>


<?php $this->load->view("commons/footer"); ?>
