<?php 

require_once('class.phpmailer.php');
/*
$link = mysql_connect('localhost', 'nuvinoti_site', 'Nuvi.1');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}else{
	mysql_select_db('nuvinoti_site', $link);
	$sql = "SELECT * FROM app_profile WHERE id=".$_POST["id"];
	$rs = mysql_query($sql);
	$data = mysql_fetch_array($rs)
	while ($data = mysql_fetch_array($rs)) {
		if (!empty($data["correo"])) {
		  $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
		  $mail->IsSendmail(); // telling the class to use SendMail transport
		  $mail->AddAddress($data["correo"], $data["participante1"]);
		  $mail->SetFrom('info@battleofboxes.com', 'Battle Of Boxes');
		  $mail->Subject = 'Battle of boxes te presenta Yummers';
		  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
		  $result = file_get_contents('http://battleofboxes.com/blast-yummers.html');  
		  $mail->MsgHTML($result);
		  if ($mail->Send()) {
			$good++;  	
		  }else{
			$bad++;
		  }
		}
	}
mysql_close($link);														
echo "buenos:".$good;
echo "<br>";
echo "malos:".$bad;
}*/
?>
<?php 

		  $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
		  //$mail->IsSendmail(); // telling the class to use SendMail transport
			$mail->IsSMTP(); // telling the class to use SMTP
			
			
			// 1 = errors and messages
			// 2 = messages only
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->Host       = "mail.whynot.mx"; // sets the SMTP server
			$mail->Port       = 2525;                    // set the SMTP port for the GMAIL server
			$mail->Username   = "oscar.quintero@whynot.mx"; // SMTP account username
			$mail->Password   = "multiply";        // SMTP account password		  
		  $mail->AddAddress($_POST["emailcontact"], "");
		  $mail->SetFrom($_POST["email"], $_POST["name"]);
		  $mail->Subject = utf8_decode('Página de captura - Lead Quest');
		  $body = "<ul>
		  <li><strong>Nombre</strong>:".$_POST["name"]."</li>
		  <li><strong>Correo</strong>:".$_POST["email"]."</li>
		  </ul>";
		  $mail->MsgHTML(utf8_decode($body));
		  $mail->Send();
		  echo '
<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" >
                    
                    <h2>Muchas gracias por contactarme</h2>
                    <p>Recibi tus datos correctamente. En la brevedad posible te contactaré.</p>
                </div>
               <div class="row">
                   <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1" id="share">
                       <p>Copyright &copy; 2014 Lead Quest</p>
                   </div>
               </div>
		  ';
?>