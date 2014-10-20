<?php $this->load->view("commons/header"); ?>
  
<!-- page title -->
    <div class="page-main-title">

        <div class="leaft-title"><h1>Administration</h1></div>
        <span class="reght-pagenation"><a href="<?php echo site_url(); ?>">Administration</a> <i>/ </i> Packages</span>

    </div><!-- end copyright info -->

<!-- Content
======================================= -->  
<div id="content">
    <div class="container">
    
        <!-- content left area -->
        <div class="content-left">
            <h2>Packages <a href="<?php echo site_url("admin/receive-package"); ?>" class="button green small" style="float:right;">new</a></h2>
            <div class="table-style">
                <table class="table-list">
                    <tbody><tr>
                        <th>Space</th>
                        <th>Client</th>
                        <th>Item</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                    if (isset($packages) && !empty($packages)) {
                        foreach ($packages as $package) {
                           echo "<tr>
                           <td>M-00".$package->user_id."</td>
                           <td>".$package->firstname." ".$package->lastname."</td>
                           <td>".$package->item_description."</td>
                           <td>".$package->status_pack."</td>
                           <td><a href=\"".site_url("admin/package/".$package->id_package)."\" class=\"button orange small\">details</a></td>
                           </tr>"; 
                        }
                    }else{
                        echo "<tr><td colspan=\"5\">no Packages registered</td></tr>";
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