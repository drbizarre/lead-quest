<?php $this->load->view("commons/header"); ?>
  
<!-- page title -->
    <div class="page-main-title">

        <div class="leaft-title"><h1>Términos y Condiciones</h1></div>
        <span class="reght-pagenation"><a href="<?php echo site_url(); ?>">Home</a> <i>/ </i> Terms and Conditions</span>

    </div><!-- end copyright info -->

<!-- Content
======================================= -->  
<div id="content">
    <div class="container">
    
        <!-- content left area -->
        <div class="content-left">
            
                <p>EL uso de Nuvi Noticias, es exclusivo para los miembros de Nuvi Global, no se puede usar el sitio ni los servicios por terceros que no estén o formen parte de los miembros activos de Nuvi Global.</p>
                <p>Este es un servicio mensual y estará efectivo desde el momento en que el participante se registre y acepte el cobro mensual, este cobro se hará efectivo electrónicamente cada mes a menos que el empresario independiente de Nuvi Global cancele el servicio.</p>
                <p>Es responsabilidad del Empresario Independiente de Nuvi el cambiar su tarjeta usada como método de pago en caso de que la tarjeta que esta en el sistema sea renovada o cancelada, el uso del sistema se cancelara de inmediato si el sistema no  tiene una tarjeta activa.</p>
                <p>El uso del sistema es PERSONAL y no puede usarse entre  dos o mas miembros.</p>
                <h4>DISPOSICIONES FINALES</h4>
                <ul>
                <li>La falta de NuviNoticias.com de ejercer o hacer cumplir cualquiera de los Términos Legales y Condiciones de Uso no constituirá renuncia de dicho derecho.</li>
                <li>Si cualquiera de las disposiciones contenidas en los presentes Términos Legales y Condiciones de Uso fuese inválida o de imposible ejecución, entonces: la validez y legalidad de las otras disposiciones contenidas en los Términos Legales y Condiciones de Uso no se verán afectadas o menoscabadas en modo alguno, y dicha disposición será modificada a fin de que sea válida y ejecutable.</li>
                <li>NuviNoticias.com se reserva el derecho de modificar el servicio y los Términos Legales y Condiciones si previo aviso.</li>
                </ul>



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