<?php $this->load->view("commons/header"); ?>
<?php 
$membership_selected = $this->session->userdata('membership_selected');
$info_saved = $this->session->userdata('info_saved');
switch ($membership_selected) {
    case 'monthly': $plan_price = "14.99"; break;
    case 'annual': $plan_price = "150"; break;
    case 'semestral': $plan_price = "75"; break;        
}
?>
<!-- page title -->
    <div class="page-main-title">

        <div class="leaft-title"><h1>Nueva Cuenta</h1></div>
        <span class="reght-pagenation"><a href="<?php echo site_url(); ?>">Inicio</a> <i>/ </i> Nueva Cuenta <i>/ </i> Pago</span>

    </div><!-- end copyright info -->

<!-- Content
======================================= -->  
<div id="content">
    <div class="container">
    
<div class="content-fullwidth">
<div id="tabs">
    
            <ul class="tabs">  
                <li class=""><a href="<?php echo site_url("new-account/".$membership_selected); ?>">1. Tipo de Membresía</a></li>
                <li class=""><a href="<?php echo site_url("your-information"); ?>">2. Información General</a></li>
                <li class="active"><a href="#tab3">3. Pago</a></li>
                <li class=""><a href="#tab4">4. Tu Duplicador Digital</a></li>
                
            </ul><!-- /# end tab links -->   
 
        <div class="tab-container">
            
            <div id="tab1" class="tab-content"> 
                <div class="one-fourth">
                    <p><a class="button lightblue medium align" href="<?php echo site_url("your-information/"); ?>"> << Paso Anterior</a></p>
                </div>                
                <div class="one-fourth">
                    &nbsp;
                </div>
                <div class="one-fourth">
                    &nbsp;
                </div>                
                <div class="one-fourth">
                    <?php 
                    if (!empty($payment_complete)) {
                    ?>
                    <p align="right"><a class="button lightblue medium align" href="<?php echo site_url("welcome"); ?>">Siguente paso >></a></p>            
                    <?php 
                    }else{
                    ?>
                    <p align="right">completar el proceso de pago</p>       <br>     <br>
                    <?php 
                    }
                    ?>
                    <?php 
                    switch ($membership_selected) {
                        case 'monthly': $plan = "Mensual"; break;
                        case 'annual': $plan = "Anual"; break;
                        case 'semestral': $plan = "Semestral"; break;
                    }
                    ?>
                </div>
                

                <h3>Revisar tu orden</h3>
                <div class="divider-line2_form"></div>

                <table class="table-list">
                    <thead>
                        <tr>
                            <th>Concepto</th>
                            <th>Cantidad</th>
                            <th>Costo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Suscripción <?php echo $plan; ?></strong><br><em>descripción</em></td>
                            <td>1</td>
                            <td>$<?php echo $plan_price; ?></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><strong>$<?php echo $plan_price; ?></strong></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="divider-line2_form"></div>                
                <h3>Método de pago</h3>
                <!--div class="divider-line2_form"></div>
                <p><label><input type="radio" name="payment-option" value="wire-transfer"> <img src="<?php echo base_url(); ?>assets/images/1369494611_wire_transfer.png"> Transferencia Bancaria</label></p>               
                <p><label><input type="radio" name="payment-option" value="paypal"> <img src="<?php echo base_url(); ?>assets/images/1369494621_paypal.png"> Paypal</label></p>               
                <p><label><input type="radio" name="payment-option" value="credit-card"> <img src="<?php echo base_url(); ?>assets/images/1369494642_credit_card.png"> Credit Card</label></p-->
                <!--div id="wire-transfer" class="payment-option">
                    <div class="divider-line2_form"></div>
                    <h4>Datos para transferencia bancaria</h4>
                    <dl>
                        <dd>Nuvinoticias Incorporated</dd>
                        <dd>JPMorgan Chase Bank, N.A.</dd>
                        <dd>Account: 11111111</dd>
                        <dd>Routing: 1111111111</dd>
                        <dd>Swift: 1111111</dd>
                    </dl>
                   <div class="divider-line2_form"></div>
                    <p>Pagos por transferencia seran validados previamente para que tu cuenta sea activada.</p>
                    <p><a href="<?php echo site_url("welcome"); ?>" class="button orange small align">Enterado, crear mi cuenta</a></p>
                     <div class="divider-line2_form"></div>
                </div-->         

                <div id="paypal" class="payment-option">
                    <?php if ($membership_selected=="monthly") { ?>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="745DGM73FG5Q8">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                    <?php } ?>
                     <?php if ($membership_selected=="annual") { ?>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="Y254JC4SMZDW8">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                    <?php } ?>
                     <?php if ($membership_selected=="semestral") { ?>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="GUC3DSE3PQXH2">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                    <?php } ?>                    
                </div>


            </div><!-- end tab single section --> 

            
            
        </div>
        
        </div><!-- end tab -->
        
        </div><!-- end content left area -->

    </div>
</div>

<?php $this->load->view("commons/footer"); ?>
</body>
</html>