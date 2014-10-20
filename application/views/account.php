<?php $this->load->view("commons/header"); ?>
  
<!-- page title -->
    <div class="page-main-title">

        <div class="leaft-title"><h1>Mi Cuenta</h1></div>
        <span class="reght-pagenation"><a href="<?php echo site_url(); ?>">Inicio</a> <i>/ </i> Mi Cuenta</span>

    </div><!-- end copyright info -->

<!-- Content
======================================= -->  
<div id="content">
    <div class="container">
    
        <!-- content left area -->
        <div class="content-left">
            <h2>Acceso a Usuarios</h2>
            <form action="<?php echo site_url("membership/login"); ?>" method="post">
                    
                        <fieldset>
                        
                                                
                        <label for="name" class="blocklabel">Usuario*</label>
                        <p class="" ><input name="username" class="input_bg" type="text" id="username" value=''/></p>
                        
                        
                        <label for="email" class="blocklabel">Contraseña*</label>
                        <p class="" ><input name="password" class="input_bg" type="password" id="password" value='' /></p>

                        </fieldset>
                        <p style="clear:left; margin-top:20px; display:block;">
                        <input name="sent" type="submit" value="Entrar" class="button medium align" id="send"/></p>
                        <p><a href="<?php echo site_url("support"); ?>">¿olvidaste tu usuario ó contraseña?</a></p>
                        </form> 
            
        </div><!-- end content left area -->

        <?php $this->load->view("commons/right-sidebar1"); ?>

    </div>
</div>

<?php $this->load->view("commons/footer"); ?>
</body>
</html>