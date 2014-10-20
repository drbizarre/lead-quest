<?php $this->load->view("commons/header"); ?>
  
<!-- page title -->
    <div class="page-main-title">

        <div class="leaft-title"><h1>Administración</h1></div>
        <span class="reght-pagenation"><a href="<?php echo site_url(); ?>">Administración</a> <i>/ </i> Clientes</span>

    </div><!-- end copyright info -->

<!-- Content
======================================= -->  
<div id="content">
    <div class="container">


        <!-- content left area -->
        <div class="content-left">
            <h2>Clientes</h2>
            <div class="table-style">
                <table class="table-list">
                    <tbody><tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Membership</th>
                        <th>Account Expiration</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                    if (isset($clients) && !empty($clients)) {
                        foreach ($clients as $client) {
                            if ($user->username="supervisor@nuvinoticias.com") {
                           echo "<tr>
                           <td>".$client->user_id."</td>
                           <td><a target='_blank' href='http://www.nuvinoticias.com/".$client->username."'>".$client->username."</a></td>
                           <td>".$client->membership_plan."</td>
                           <td>".$client->account_expiration_date."</td>
                           <td><a href=\"".site_url("admin/client/".$client->user_id)."\" class=\"button orange small\">detalles</a></td>
                           </tr>"; 
                            }else{
                           echo "<tr>
                           <td>".$client->user_id."</td>
                           <td><a target='_blank' href='http://www.nuvinoticias.com/".$client->username."'>".$client->username."</a></td>
                           <td>".$client->membership_plan."</td>
                           <td>".$client->account_expiration_date."</td>
                           <td><a href=\"".site_url("admin/client/".$client->user_id)."\" class=\"button orange small\">detalles</a> <a href=\"".site_url("clients/del/".$client->user_id)."\" class=\"button red small\">eliminar</a></td>
                           </tr>"; 
                        }
                        }
                    }else{
                        echo "<tr><td colspan=\"5\">no clients registered</td></tr>";
                    }
                    ?>
                </tbody></table>
            </div>
            
            
        </div><!-- end content left area -->

        <?php $this->load->view("commons/dashboard-admin"); ?>

    </div>
</div>

<?php $this->load->view("commons/footer"); ?>
</body>
</html>