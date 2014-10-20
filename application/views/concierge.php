<?php $this->load->view("commons/header"); ?>
  
<!-- page title -->
    <div class="page-main-title">

        <div class="leaft-title"><h1>Concierge Services</h1></div>
        <span class="reght-pagenation"><a href="<?php echo site_url(); ?>">Home</a> <i>/ </i> Concierge Services</span>

    </div><!-- end copyright info -->

<!-- Content
======================================= -->  
<div id="content">
    <div class="container">
    
        <!-- content left area -->
        <div class="content-left">
            <h2>Assisted Purchase</h2>
            <p>We have a specialized <strong>purchase</strong> department, composed by professional buyers, to help you on the <strong>purchase</strong> process. </p>
            <p>Just tell us all the information on the product you are looking for, and we can help you to locate it at the best price and under the best <strong>shopping</strong> conditions.</p>
            <p>If the seller do not accept your credit card as a payment option, we can help you, making the payment for you, once we receive the money through our bank account.</p>
            <h2>How We Do It</h2>
            <p><img src="<?php echo base_url(); ?>assets/images/steps-assisted.gif"></p>
            <h2>Join Us Now</h2>
            <p>A few minutes after registration, you will receive an email containing your new USA ADDRESS. Just fill out the application and you will have an address in USA.</p>
            <p><a class="button orange small align" href="<?php echo site_url("my-account"); ?>">Register Now</a></p>
        </div><!-- end content left area -->

        <?php $this->load->view("commons/right-sidebar"); ?>

    </div>
</div>

<?php $this->load->view("commons/footer"); ?>
</body>
</html>