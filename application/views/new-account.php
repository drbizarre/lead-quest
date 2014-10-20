<?php $this->load->view("commons/header"); ?>
<?php 
$membership_selected = $this->session->userdata('membership_selected');
?>
<!-- page title -->
    <div class="page-main-title">

        <div class="leaft-title"><h1>Nueva cuenta</h1></div>
        <span class="reght-pagenation"><a href="<?php echo site_url(); ?>">Inicio</a> <i>/ </i> Nueva cuenta</span>

    </div><!-- end copyright info -->

<!-- Content
======================================= -->  
<div id="content">
    <div class="container">
    
<div class="content-fullwidth">
<div id="tabs">
    
            <ul class="tabs">  
                <li class="active"><a href="#tab1">1. Tipo de membresía</a></li>
                <li class=""><a href="#tab2">2. Información General</a></li>
                <li class=""><a href="#tab3">3. Pago</a></li>
                <li class=""><a href="#tab4">4. Tu Duplicador Digital</a></li>
                
            </ul><!-- /# end tab links -->   
 
        <div class="tab-container">
            
            <div id="tab1" class="tab-content"> 
                <div class="one-fourth">
                    &nbsp;
                </div>                
                <div class="one-fourth">
                    &nbsp;
                </div>
                <div class="one-fourth">
                    &nbsp;
                </div>                
                <div class="one-fourth">
                    <?php 
                    if (!empty($membership_selected)) {
                    ?>
                    <p align="right"><a class="button lightblue medium align" href="<?php echo site_url("your-information"); ?>">Siguente paso >></a></p>            
                    <?php 
                    }else{
                    ?>
                    <p align="right">siguiente opción</p>            
                    <?php 
                    }
                    ?>
                </div>

                
                <div class="table-style">
                    <table class="table-list">
                        <tr>
                            <th>Mensual</th>
                            <th>Anual</th>
                            <th>Semestral</th>
                        </tr>
                        <tr>
                            <td>$14.99 / por mes</td>
                            <td>$150 / por año</td>
                            <td>$75 / por semestre</td>
                        </tr>                        
                        <tr>
                            <td>Registro</td>
                            <td>Registro</td>
                            <td>Registro</td>
                        </tr>                         
                        <tr>
                            <td>Membresía</td>
                            <td>Membresía</td>
                            <td>Membresía</td>
                        </tr>                         
                        <tr>
                            <td>Duplicador Digital</td>
                            <td>Duplicador Digital</td>
                            <td>Duplicador Digital</td>
                        </tr>                         
                        <tr>
                            <td>soporte técnico</td>
                            <td>soporte técnico</td>
                            <td>soporte técnico</td>
                        </tr>                         
                        <tr>
                            <td><?php echo($membership_selected=="monthly")?"<a class=\"button orange small align\">Seleccionada</a>":"<a class=\"button gray small align\" href=\"".site_url("new-account/monthly")."\">Seleccionar</a>"; ?></td>
                            <td><?php echo($membership_selected=="annual")?"<a class=\"button orange small align\">Seleccionada</a>":"<a class=\"button gray small align\" href=\"".site_url("new-account/annual")."\">Seleccionar</a>"; ?></td>
                            <td><?php echo($membership_selected=="semestral")?"<a class=\"button orange small align\">Seleccionada</a>":"<a class=\"button gray small align\" href=\"".site_url("new-account/semestral")."\">Seleccionar</a>"; ?></td>
                        </tr> 
                    </table>
                </div>
                <?php //echo $membership_selected; ?>
            </div><!-- end tab single section --> 
            
            <div id="tab2" class="tab-content"> 
                <h3>Your Details</h3>
                <div class="divider-line2_form"></div>
                <form id="info-user-form">
                    <fieldset>
                        <div><label for="firstname" class="blocklabel_form">First Name</label><input name="firstname" class="input_bg_form" type="text" id="firstname" value=''/></div>
                        <div><label for="lastname" class="blocklabel_form">Last Name</label><input name="lastname" class="input_bg_form" type="text" id="lastname" value=''/></div>
                        <div><label for="email" class="blocklabel_form">Email</label><input name="email" class="input_bg_form" type="text" id="email" value=''/></div>
                        <div><label for="password" class="blocklabel_form">Password</label><input name="Password" class="input_bg_form" type="password" id="password" value=''/></div>
                    </fieldset>

                <h3>Shipping Address</h3>
                <div class="divider-line2_form"></div>
                    <fieldset>
                        <div><label for="firstname" class="blocklabel_form">First Name</label><input name="firstname" class="input_bg_form" type="text" id="firstname" value=''/></div>
                        <div><label for="lastname" class="blocklabel_form">Last Name</label><input name="lastname" class="input_bg_form" type="text" id="lastname" value=''/></div>
                        <div><label for="address" class="blocklabel_form">Address</label><input name="address" class="input_bg_form" type="text" id="address" value=''/></div>
                        <div><label for="address" class="blocklabel_form">City</label><input name="address" class="input_bg_form" type="text" id="address" value=''/></div>
                        <div><label for="address" class="blocklabel_form">State/Province/Region</label><input name="address" class="input_bg_form" type="text" id="address" value=''/></div>
                        <div><label for="address" class="blocklabel_form">Postal Code</label><input name="address" class="input_bg_form" type="text" id="address" value=''/></div>
                        <div><label for="address" class="blocklabel_form">Contry</label><input name="address" class="input_bg_form" type="text" id="address" value=''/></div>
                        <div><label for="address" class="blocklabel_form">Phone Number</label><input name="address" class="input_bg_form" type="text" id="address" value=''/></div>
                    </fieldset>
                <h3>Billing Address</h3>
                <div class="divider-line2_form"></div>
                    <fieldset>
                        <div><label for="firstname" class="blocklabel_form">First Name</label><input name="firstname" class="input_bg_form" type="text" id="firstname" value=''/></div>
                        <div><label for="lastname" class="blocklabel_form">Last Name</label><input name="lastname" class="input_bg_form" type="text" id="lastname" value=''/></div>
                        <div><label for="address" class="blocklabel_form">Address</label><input name="address" class="input_bg_form" type="text" id="address" value=''/></div>
                        <div><label for="address" class="blocklabel_form">City</label><input name="address" class="input_bg_form" type="text" id="address" value=''/></div>
                        <div><label for="address" class="blocklabel_form">State/Province/Region</label><input name="address" class="input_bg_form" type="text" id="address" value=''/></div>
                        <div><label for="address" class="blocklabel_form">Postal Code</label><input name="address" class="input_bg_form" type="text" id="address" value=''/></div>
                        <div><label for="address" class="blocklabel_form">Contry</label><input name="address" class="input_bg_form" type="text" id="address" value=''/></div>
                        <div><label for="address" class="blocklabel_form">Phone Number</label><input name="address" class="input_bg_form" type="text" id="address" value=''/></div>
                    </fieldset>

                </form>

            </div><!-- end tab single section -->
            
            
            <div id="tab3" class="tab-content"> 
                <h3>3</h3>
            </div><!-- end tab single section -->
            <div id="tab4" class="tab-content"> 
                <h3>4</h3>
            </div><!-- end tab single section -->            
        </div>
        
        </div><!-- end tab -->
        
        </div><!-- end content left area -->

    </div>
</div>

<?php $this->load->view("commons/footer"); ?>
</body>
</html>