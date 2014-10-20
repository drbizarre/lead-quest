<?php $this->load->view("commons/header"); ?>
  
<!-- page title -->
    <div class="page-main-title">

        <div class="leaft-title"><h1>Import&amp;Export Help</h1></div>
        <span class="reght-pagenation"><a href="<?php echo site_url(); ?>">Home</a> <i>/ </i> Support</span>

    </div><!-- end copyright info -->

<!-- Content
======================================= -->  
<div id="content">
    <div class="container">
<div class="content-fullwidth">
            
            <div class="one-half">
                
            <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
            
            <p>Please be patient while waiting for response. (24/7 Support!)</p>

            <div class="divider-line2"></div>
            <h3>Contact Form</h3>
                    <?php
                    if (isset($is_form_sent) && $is_form_sent=="yes") {
                        if (isset($custom_message) && $custom_message=="success"){
                            echo "<div class=\"success\" id=\"div2\">
                    <div class=\"message-box-wrap\">
              <button id=\"colosebut2\" class=\"close-but\">close</button> Thank You</div>
                </div>";
                        }else{
                            echo "<div class=\"error\" id=\"div4\">
                    <div class=\"message-box-wrap\">
                   <button id=\"colosebut4\" class=\"close-but\">close</button> Error</div>
                </div>";
                        }
                    }                    
                    ?>
                    <form action="<?php echo site_url("request-support-advanced"); ?>" method="post">
                    
                        <fieldset>
                        <label for="name" class="blocklabel">Your Name*</label>
                        <p class="" ><input name="yourname" class="input_bg" type="text" id="name" value=''/></p>
                        
                        
                        <label for="email" class="blocklabel">E-Mail*</label>
                        <p class="" ><input name="email" class="input_bg" type="text" id="email" value='' /></p>
                        
                        <label for="name" class="blocklabel">Telephone</label>
                        <p class="" ><input name="telephone" class="input_bg" type="text" id="telephone" value=''/></p>                       
                        
                        <label for="name" class="blocklabel">Country/State/City</label>
                        <p class="" ><input name="camefrom" class="input_bg" type="text" id="camefrom" value=''/></p>                       


                        <label for="message" class="blocklabel">Your Message*</label>
                        <p class=""><textarea name="message" class="textarea_bg" id="message" cols="20" rows="7" ></textarea></p>
                        
                        
                        <p><input name="Send" type="submit" value="SUBMIT" class="button medium align" id="send"/></p>
                                                
                        </fieldset>
                        
                    </form> 
            
            
            
            </div>
            
            
            
            <div class="one-half last">
            
                <div class="address-info">
                    <h3>Address Info</h3>
                        <ul>
                        <li>
                        <strong>Storage and ship</strong><br />
                        2013 Via Tercero Suite M112 San Ysidro CA, 92173<br />
                        E-mail: <a href="mailto:info@storageandship.com">info@storageandship.com</a><br />
                        Website: <a href="<?php echo site_url(); ?>">www.storageandship.com</a>
                        </li>
                    </ul>
                </div>

                
                
                 <h3>Find the Address</h3>
                
                <iframe class="google-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=San+Diego,+CA,+United+States&amp;aq=0&amp;oq=san+diego&amp;sll=37.0625,-95.677068&amp;sspn=53.035373,114.169922&amp;ie=UTF8&amp;hq=&amp;hnear=San+Diego,+California&amp;t=m&amp;z=10&amp;ll=32.715329,-117.157255&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=San+Diego,+CA,+United+States&amp;aq=0&amp;oq=san+diego&amp;sll=37.0625,-95.677068&amp;sspn=53.035373,114.169922&amp;ie=UTF8&amp;hq=&amp;hnear=San+Diego,+California&amp;t=m&amp;z=10&amp;ll=32.715329,-117.157255" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                    
                
      

            
        
        </div><!-- end content left area -->
        

            
            

            
        
        </div><!-- end full width -->    
    
    </div>
</div>


<?php $this->load->view("commons/footer"); ?>
</body>
</html>