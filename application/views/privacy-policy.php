<?php $this->load->view("commons/header"); ?>
  
<!-- page title -->
    <div class="page-main-title">

        <div class="leaft-title"><h1>Privacy Policy</h1></div>
        <span class="reght-pagenation"><a href="<?php echo site_url(); ?>">Home</a> <i>/ </i> Privacy Policy</span>

    </div><!-- end copyright info -->

<!-- Content
======================================= -->  
<div id="content">
    <div class="container">
    
        <!-- content left area -->
        <div class="content-left privacy">
<h2>Políticas de privacidad:</h2>
<ol>
<li>Nuvi Global es el único operador de recolección o mantenimiento de la información personal a través de la página web www.nuvinoticias.com. </li>
<li>Un miembro de (cualquier visitante u otra persona que hace uso de la página web) puede ponerse en contacto con www.nuvinoticias.com utilizando la siguiente información: 
<address>
Nuvi Global<br>
9375 Archibald Ave. <br>
suite 101 <br>
Rancho Cucamonga CA 91730 <br>
Estados Unidos <br>
Email: <a href="mailto:info@stemnuvi.com">info@stemnuvi.com</a> <br>
Teléfono: 844-740-6938 <br>
Fax: 1-877-365-7627 
</address>    
</li>


<li>Por favor revise los Términos y condiciones de uso. </li>
</ol>
<h3>Recopilación de información </h3>
<ol>
<li>La página web recoge activamente información de sus miembros, como el nombre y apellido, edad, ciudad y estado, dirección de correo electrónico, sexo, fecha de nacimiento, y la información a través de formularios de registro, aplicaciones, encuestas voluntarias, sorteos, concursos, compras y participación en foros públicos como los tablones de anuncios. </li>
<li>El sitio se reserva el derecho de cobrar de forma pasiva la información relacionada con el uso del sitio, tales como tiempo de permanencia en el sitio, las áreas visitadas, y los sitios vinculados desde y hacia. En el futuro, el sitio puede recopilar información adicional y puede instalar cookies en los discos duros de los miembros. </li>
<li>El sitio no permite a los miembros ningún tipo de  información personal disponible en foros públicos como los tablones de anuncios, en la medida de los miembros eligen a revelar tal información. </li>
</ol>
<h3>Uso de Información </h3>
<ol>
<li>La información personal se utiliza para la conservación de registros, gestión de sitios, las actividades en el sitio, el cumplimiento de las transacciones solicitadas, y la comercialización sólo a los miembros que han accedido a dicha comercialización. </li>
<li>La información personal recabada de los miembros no es revelada a terceros, excepto empresas con las que el sitio web es una relación de propiedad común. El sitio puede emplear terceras partes para revisar ciertos datos personales para que la asesore en temas relacionados demográficos y de marketing, por lo general, de manera agregada, y sólo después de estas terceras partes han acordado mantener la confidencialidad, seguridad e integridad de la información personal obtenida. </li>
</ol>
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