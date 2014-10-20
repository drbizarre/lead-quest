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
                <h3>New Package</h3>
                <form action="<?php echo site_url("packages/save"); ?>" method="post">

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
                                       echo "<option value=\"".$client->id."\">M00-".$client->id." ".$client->firstname." ".$client->lastname." </option>"; 
                                    }
                                }
                                ?>                                
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th><label>Received Date</label> </th>
                            <td><input id="received_date" name="received_date" type="text" class=""></td>
                        </tr>                        
                        <tr>
                            <th><label>Received Time</label> </th>
                            <td><input id="received_time" name="received_time" type="text" class=""></td>
                        </tr>   
                        <tr>
                            <th><label>Item Description</label></th>
                            <td><input id="item_description" name="item_description" type="text" class=""></td>
                        </tr>                        
                        <tr>
                            <th><label>Weight</label> </th>
                            <td><input id="weight" name="weight" type="text" class=""></td>
                        </tr>
                        <tr>
                            <th>Dimensions</th>
                            <td><input id="width" name="width" type="text" placeholder="width" size="6"> x <input id="height" name="height" type="text" placeholder="height" size="6"> x <input id="depth" name="depth" type="text" placeholder="depth" size="6"></td>
                        </tr>
                        <tr>
                            <th><label>Condition</label> </th>
                            <td><input id="condition" name="condition" type="text" class=""></td>
                        </tr>
                        <tr>
                            <th><label>Aditional Information</label> </th>
                            <td><textarea id="aditional_information" name="aditional_information"></textarea></td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td><input class="button black small" type="submit" value="Save and Notify" name="submit"></td>
                        </tr>                        
                    </tbody>
                </table>
            </form>
            </div>
            
            
        </div><!-- end content left area -->

        <?php $this->load->view("commons/dashboard-admin"); ?>

    </div>
</div>

<?php $this->load->view("commons/footer"); ?>
</body>
</html>