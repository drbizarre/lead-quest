<?php $this->load->view("commons/header"); ?>
  
<!-- page title -->
    <div class="page-main-title">

        <div class="leaft-title"><h1>Administration - <span>Packages</span></h1></div>
        <span class="reght-pagenation"><a href="<?php echo site_url(); ?>">Administration</a> <i>/ </i> Packages</span>

    </div><!-- end copyright info -->

<!-- Content
======================================= -->  
<div id="content">
    <div class="container">
    
        <!-- content left area -->
        <div class="content-left">
            
            <div class="table-style">
                <h3>Package Information</h3>
                <form action="<?php echo site_url("packages/edit"); ?>" method="post">
                <input type="hidden" id="id" name="id" value="<?php echo $package->id_package; ?>">
                <table class="table-list">
                    <tbody>
                        <tr>
                            <th><label>Client</label></th>
                            <td><?php echo $package->firstname; ?> <?php echo $package->lastname; ?></td>
                        </tr>
                        <tr>
                            <th><label>Location</label></th>
                            <td>M00-<?php echo $package->user_id; ?></td>
                        </tr>
                        <tr>
                            <th><label>Received Date</label> </th>
                            <td><?php echo $package->received_date; ?></td>
                        </tr>                        
                        <tr>
                            <th><label>Received Time</label> </th>
                            <td><?php echo $package->received_time; ?></td>
                        </tr>   
                        <tr>
                            <th><label>Item Description</label></th>
                            <td><?php echo $package->item_description; ?></td>
                        </tr>                        
                        <tr>
                            <th><label>Weight</label> </th>
                            <td><?php echo $package->weight; ?></td>
                        </tr>
                        <tr>
                            <th>Dimensions</th>
                            <td><?php echo $package->width; ?>x<?php echo $package->height; ?>x<?php echo $package->depth; ?></td>
                        </tr>
                        <tr>
                            <th><label>Condition</label> </th>
                            <td><?php echo $package->condition; ?></td>
                        </tr>
                        <tr>
                            <th><label>Aditional Information</label> </th>
                            <td><?php echo $package->aditional_information; ?></td>
                        </tr>
                        <tr>
                            <th><label>Status</label> </th>
                            <td><?php echo $package->status_pack; ?></td>
                        </tr>
                        
                        <tr>
                            <th>&nbsp;</th>
                            <td><input class="button orange small" type="submit" value="Edit" name="submit"></td>
                        </tr>                        
                    </tbody>
                </table>
                </form>
                <?php 
                if (isset($images) && !empty($images)) {
                ?>
                <h3>Pictures</h3>
                <div id="pictures_of_package">
                    <?php foreach ($images as $image) {
                        echo "<a href=\"".base_url()."media/".$image->filename."\"><img src=\"".base_url()."media/".$image->filename."\" /></a>";
                    } ?>
                </div>
                <table class="table-list">
                    <tbody>
                        <tr>
                            <th>Picture 1</th>
                            <td><input type="file" name="picture1" id="picture2"></td>
                        </tr>
                        <tr>
                            <th>Picture 2</th>
                            <td><input type="file" name="picture1" id="picture2"></td>
                        </tr>
                        <tr>
                            <th>Picture 3</th>
                            <td><input type="file" name="picture1" id="picture2"></td>
                        </tr>
                    </tbody>
                </table>
                <?php } ?>
            </div>
            
            
        </div><!-- end content left area -->

        <?php $this->load->view("commons/dashboard-admin"); ?>

    </div>
</div>

<?php $this->load->view("commons/footer"); ?>
</body>
</html>