<?php $this->load->view("commons/header"); ?>
  
     <div class="full_page_photo no_photo">
          <div class="container">
               <div class="hgroup">
                    <div class="hgroup_title animated bounceInUp ">
                         <div class="container">
                              <h1>Cont&aacute;ctanos</h1>
                         </div>
                    </div>
                    <div class="hgroup_subtitle animated bounceInUp skincolored">
                         <div class="container">
                              <p>Un representante autorizado de <strong>Lead-Quest</strong> se comunicará contigo en breve!</p>
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
                    <div class="row">
                         <div class="office_address col-sm-6 col-md-4">
                              <div class="team_member"> <img src="<?php echo base_url(); ?>assets/images/LogoLeadQUest.png"  alt="logo">
                                   <h5>Experimenta el poder de la Transformación</h5>
                                   <small>Plataforma de formacion y desarrollo de negocio</small><br>


                                   <abbr title="Phone">P:</abbr> (951)223-1623<br>
                                   <abbr title="Phone">E:</abbr> <a href="mailto:#">info@lead-quest.com</a>  <br> <br>
                                   <a target="_blank" href="https://www.facebook.com/LeadQuestInc?ref=hl"><img src="<?php echo base_url(); ?>assets/images/facebook2.png"></a>
                                   <a target="_blank" href="https://www.youtube.com/channel/UCLypnjBjnPHv4LsjeUYXNCA"><img src="<?php echo base_url(); ?>assets/images/youtube33.png"></a>
                                   <a target="_blank" href="https://twitter.com/LeadQuestinc"><img src="<?php echo base_url(); ?>assets/images/twitter38.png"></a>
                                 </div>
                         </div>
                         <div class="contact_form col-sm-6 col-md-8">
                              <?php
                              if (isset($is_form_sent) && $is_form_sent=="yes") {
                                  if (isset($custom_message) && $custom_message=="success"){
                                      echo "<div class=\"success\" id=\"div2\">
                              <div class=\"message-box-wrap\">
                        <button id=\"colosebut2\" class=\"close-but\">close</button> Gracias por contactarnos. Recibimos tus datos correctamente.</div>
                          </div>";
                                  }else{
                                      echo "<div class=\"error\" id=\"div4\">
                              <div class=\"message-box-wrap\">
                             <button id=\"colosebut4\" class=\"close-but\">close</button> Error</div>
                          </div>";
                                  }
                              }                    
                              ?>                              
                              <form name="" id="" method="post" action="<?php echo site_url("request-support"); ?>">
                                   <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                             <label>Nombre</label>
                                             <input name="yourname" id="yourname" class="form-control" type="text" value="">
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
                                             <button id="submit_btn" class="btn btn-primary" name="submit">Enviar</button> <span id="notice" class="alert alert-warning alert-dismissable hidden" style="margin-left:20px;"></span> </div>
                                   </div>
                              </form>
                         </div>
                    </div>
               </section>
          </div>
          <br>


<?php $this->load->view("commons/footer"); ?>
