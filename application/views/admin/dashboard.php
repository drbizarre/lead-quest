<?php $this->load->view("commons/header"); ?>
  
<!-- page title -->
    <div class="page-main-title">

        <div class="leaft-title"><h1>Administración</h1></div>
        <span class="reght-pagenation"><a href="<?php echo site_url(); ?>">Inicio</a> <i>/ </i> Administración</span>

    </div><!-- end copyright info -->

<!-- Content
======================================= -->  
<div id="content">
    <div class="container">
    
        <!-- content left area -->
        <div class="content-left">
            <h2>Latest clients</h2>
            <div class="table-style">
                <table class="table-list">
                    <tbody><tr>
                        <th>Space</th>
                        <th>Name</th>
                        <th>Membership</th>
                        <th>Account Expiration</th>
                    </tr>
                    <?php 
                    if (isset($clients) && !empty($clients)) {
                        foreach ($clients as $client) {
                           echo "<tr>
                           <td>M-00".$client->user_id."</td>
                           <td>".$client->firstname." ".$client->lastname."</td>
                           <td>".$client->membership_plan."</td>
                           <td>".$client->account_expiration_date."</td>
                           </tr>"; 
                        }
                    }else{
                        echo "<tr><td colspan=\"5\">no clients registered</td></tr>";
                    }
                    ?>
                </tbody></table>
            </div>
            <h2>Latest Payments</h2>
            <div class="table-style">
                <table class="table-list">
                    <tbody><tr>
                        <th>Space</th>
                        <th>Name</th>
                        <th>Membership</th>
                        <th>Account Expiration</th>
                    </tr>
                    <?php 
                    if (isset($clients) && !empty($clients)) {
                        foreach ($clients as $client) {
                           echo "<tr>
                           <td>M-00".$client->user_id."</td>
                           <td>".$client->firstname." ".$client->lastname."</td>
                           <td>".$client->membership_plan."</td>
                           <td>".$client->account_expiration_date."</td>
                           </tr>"; 
                        }
                    }else{
                        echo "<tr><td colspan=\"5\">no clients registered</td></tr>";
                    }
                    ?>
                </tbody></table>
            </div>            
            <?php 
            /*echo "<pre>";
            print_r($user);
            echo "</pre>";
            echo "<pre>";
            print_r($profile);
            echo "</pre>";
            */
            ?>
        </div><!-- end content left area -->

        <?php $this->load->view("commons/dashboard-admin"); ?>

    </div>
</div>

<?php $this->load->view("commons/footer"); ?>
</body>
</html>