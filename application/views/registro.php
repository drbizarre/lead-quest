<?php $this->load->view("commons/header"); ?>
  
     <div class="full_page_photo no_photo">
          <div class="container">
               <div class="hgroup">
                    <div class="hgroup_title animated bounceInUp ">
                         <div class="container">
                              <h1>Registrate / Ingresar</h1>
                         </div>
                    </div>
                    <div class="hgroup_subtitle animated bounceInUp skincolored">
                         <div class="container">
                              <p>Es facil y gratis el registro.</p>
                         </div>
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
          <div class="container">
               <section>
                  <div class="container">
                    <div class="row">
                         <div class="col-sm-6 col-md-6">
                              <div class="signin">

                                   <h3>Ingresar</h3>
                                   <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="form col-lg-8">
                                             <form action="<?php echo site_url("membership/login"); ?>" method="post">
                                              <input type="hidden" id="send" name="sent" value="entrar">
                                                  <input placeholder="usuario" class="form-control" type="text" name="username">
                                                  <input placeholder="Contraseña" class="form-control" type="text" name="password">
                                                  <div class="forgot">

                                                       <a href="<?php echo site_url("contacto"); ?>">Olvidaste tu contraseña?</a> </div>
                                                  <button type="submit" class="btn btn-primary">Ingresar</button>
                                             </form>
                                        </div>
                                        <div class="col-lg-2"></div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-sm-6 col-md-6">
                              <div class="signup">
                                   <form>
                                        <fieldset>
                                             <div class="social_sign">
                                                  <h3>Aun no tienes pagina de captura?</h3>
                                                 </div>
                                             <p class="sign_title">Creala ahora, es muy rapido &amp; gratis!</p>

                                             <a href="<?php echo site_url("your-information"); ?>" class="btn btn-success">Registrate</a>
                                        </fieldset>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
               </section>
          </div>
          <br>


<?php $this->load->view("commons/footer"); ?>
