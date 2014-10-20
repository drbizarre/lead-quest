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
                <form action="<?php echo site_url("packages/update"); ?>" method="post">
                <input type="hidden" id="id" name="id" value="<?php echo $package->id_package; ?>">
                <table class="table-list">
                    <tbody>
                        <tr>
                            <th><label>Client</label></th>
                            <td>
                                <select id="user_id" name="user_id" class="">
                                    <option value="0">Selecciona</option>
                                <?php 
                                if (isset($clients) && !empty($clients)) {

                                    foreach ($clients as $client) {
                                        if ($package->user_id == $client->id) {
                                           echo "<option selected value=\"".$client->id."\">M00-".$client->id." ".$client->firstname." ".$client->lastname." </option>"; 
                                        }else{
                                            echo "<option value=\"".$client->id."\">M00-".$client->id." ".$client->firstname." ".$client->lastname." </option>"; 
                                        }

                                    }
                                }
                                ?>                                
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th><label>Location</label></th>
                            <td>M00-<?php echo $package->user_id; ?></td>
                        </tr>
                        <tr>
                            <th><label>Received Date</label> </th>
                            <td><input id="received_date" name="received_date" type="text" value="<?php echo $package->received_date; ?>"></td>
                        </tr>                        
                        <tr>
                            <th><label>Received Time</label> </th>
                            <td><input id="received_time" name="received_time" type="text" value="<?php echo $package->received_time; ?>"></td>
                        </tr>   
                        <tr>
                            <th><label>Item Description</label></th>
                            <td><input id="item_description" name="item_description" type="text" value="<?php echo $package->item_description; ?>"></td>
                        </tr>                        
                        <tr>
                            <th><label>Weight</label> </th>
                            <td><input id="weight" name="weight" type="text" value="<?php echo $package->weight; ?>"></td>
                        </tr>
                        <tr>
                            <th>Dimensions</th>
                            <td><input id="width" name="width" type="text" value="<?php echo $package->width; ?>" size="6"> x <input id="height" name="height" type="text" value="<?php echo $package->height; ?>" size="6"> x <input id="depth" name="depth" type="text" value="<?php echo $package->depth; ?>" size="6"></td>
                        </tr>
                        <tr>
                            <th><label>Condition</label> </th>
                            <td><input id="condition" name="condition" type="text" value="<?php echo $package->condition; ?>"></td>
                        </tr>
                        <tr>
                            <th><label>Aditional Information</label> </th>
                            <td><textarea id="aditional_information" name="aditional_information"><?php echo $package->aditional_information; ?></textarea></td>
                        </tr>
                        <tr>
                            <th><label>Status</label> </th>
                            <td><input type="text" id="status_pack" name="status_pack" value="<?php echo $package->status_pack; ?>"></td>
                        </tr>
                        <tr>
                            <th><label>Tracking Number</label> </th>
                            <td><input type="text" id="tracking_number" name="tracking_number" value="<?php echo $package->tracking_number; ?>"></td>
                        </tr>                        
                        <tr>
                            <th>&nbsp;</th>
                            <td><input class="button black small" type="submit" value="Update and Notify" name="submit"></td>
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