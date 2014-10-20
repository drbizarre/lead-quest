<?php $this->load->view("commons/header"); ?>
<div class="full_page_photo no_photo">
          <div class="container">
               <div class="hgroup">
                    <div class="hgroup_title animated bounceInUp">
                         <div class="container">
                              <h1>Dashboard</h1>
                         </div>
                    </div>
                    <div class="hgroup_subtitle animated bounceInUp skincolored">
                         <div class="container">
                              <p>Actualizar datos!</p>
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
          <div class="container bs-docs-container">
               <div class="row">
                    <div class="col-md-9" role="main">
 <h2>Actualizar nombre de usuario</h2>
            <?php if (isset($operation)): ?>
                <div class="<?php echo $message_type; ?>"><?php echo $message; ?></div>
            <?php endif ?> 
            <div class="table-style">
                <form action="<?php echo site_url("user/update"); ?>" method="post">
                <input type="hidden" id="id" name="id" value="<?php echo $user->id; ?>">                  
                 <table class="table-list" style="width:100%;">

                    <tbody>
                    <tr>
                        <td width="25%">leadquestmarketing.com/</td>
                        <td><input type="text" id="username" name="username" class="form-control" value="<?php echo $user->username; ?>"></td>
                    </tr>   
                    <tr>
                        <th>&nbsp;</th>
                        <td><input class="button black small" type="submit" value="Actualizar nombre de usuario" name="submit"></td>
                    </tr>                     
                    </tbody>    
                </table>
                </form>
            </div>                      
            <h2>Actualizar mis datos</h2>
            <?php if (isset($operation)): ?>
                <div class="<?php echo $message_type; ?>"><?php echo $message; ?></div>
            <?php endif ?>
            <div class="table-style">
                <form action="<?php echo site_url("profile/update"); ?>" method="post">
                <input type="hidden" id="id" name="id" value="<?php echo $profile->id; ?>">                
                <table class="table-list" style="width:100%;">

                    <tbody>
                    <tr>
                        <td width="25%">Correo</td>
                        <td><input type="text" id="emailcontact" name="emailcontact" class="form-control" value="<?php echo $profile->emailcontact; ?>"></td>
                    </tr>
                    <tr>
                        <td>Teléfono</td>
                        <td><input type="text" id="phone" name="phone" class="form-control" value="<?php echo $profile->phone; ?>"></td>
                    </tr>
                    <tr>
                        <td>Facebook</td>
                        <td><input type="text" id="facebook" name="facebook" class="form-control" value="<?php echo $profile->facebook; ?>"></td>
                    </tr>
                    <tr>
                        <td>Skype</td>
                        <td><input type="text" id="skype" name="skype" class="form-control" value="<?php echo $profile->skype; ?>"></td>
                    </tr>
                    <tr>
                        <td>Youtube</td>
                        <td><input type="text" id="youtube" name="youtube" class="form-control" value="<?php echo $profile->youtube; ?>"></td>
                    </tr>
                    <tr>
                        <td>Código de seguimiento</td>
                        <td>
                            <textarea id="analytics" name="analytics" class="form-control" row="8"><?php echo $profile->analytics; ?></textarea>
                        </td>
                    </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td><input class="button black small" type="submit" value="Actualizar datos" name="submit"></td>
                        </tr>                     
                    </tbody>
                </table>
                </form> <br>
            </div>                       
                    </div>
                    <div class="col-md-3 hidden-sm hidden-xs">
                         <div class="bs-docs-sidebar hidden-print" role="complementary" data-spy="affix" data-offset-top="564">
                              <ul class="nav bs-docs-sidenav">
                                   <?php $this->load->view("commons/dashboard-menu"); ?>
                              </ul>
                         </div>
                    </div>
               </div>
          </div>  


<?php $this->load->view("commons/footer"); ?>
