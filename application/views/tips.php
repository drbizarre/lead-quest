<?php $this->load->view("commons/header"); ?>
  
<!-- page title -->
    <div class="page-main-title">

        <div class="leaft-title"><h1>Tips de uso</h1></div>
        <span class="reght-pagenation"><a href="<?php echo site_url(); ?>">Inicio</a> <i>/ </i> Tips de uso</span>

    </div><!-- end copyright info -->

<!-- Content
======================================= -->  
<div id="content">
    <div class="container">
    
        <!-- content left area -->
        <div class="content-left privacy">
        
        <p>Próximamente</p>
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