<?php

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';
    $msg = "";

			  if (isset($_POST['submit'])) 
			  {
						$username = $_POST['name'];
						$email = $_POST['email'];
						$message = $_POST['message'];
            echo "<div style='display: none;'>";
            $mail = new PHPMailer(true);


                    try {
                        //Server settings
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'microclub.verfication.usthb@gmail.com';                     //SMTP username
                        $mail->Password   = 'Karloskarlosxx2';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port       = 465;        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
						
						
						            //Recipients Admin
						
                        $mail->setFrom('microclub.verfication.usthb@gmail.com');
                        $email_1='microclub.verfication.usthb@gmail.com';
                        $mail->addAddress($email_1);
						
                         //Content Admin
						 
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Feedback submission';	
						$mail->Body    = '<p>&nbsp;</p>
<p></p>
<p></p>
<p></p>
<table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; min-width: 320px; margin: 0 auto; background-color: #7cb9e8; width: 100%;" cellspacing="0" cellpadding="0">
<tbody>
<tr style="vertical-align: top;">
<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;">
<div class="u-row-container" style="padding: 0px; background-color: transparent;">
<div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;">
<div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;">
<div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
<div style="width: 100% !important;">
<div style="padding: 0px; border: 0px solid transparent;">
<table style="font-family: trebuchet ms,geneva;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px 0px 10px; font-family: trebuchet ms,geneva;" align="left">
<table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 6px solid #6f9de1; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr style="vertical-align: top;">
<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table id="u_content_image_4" style="font-family: trebuchet ms,geneva;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 20px 10px; font-family: trebuchet ms,geneva;" align="left">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding-right: 0px; padding-left: 0px;" align="center"><img class="v-src-width v-src-max-width" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: inline-block !important; border: none; height: auto; float: none; width: 30%; max-width: 174px;" title="Logo" src="https://i.imgur.com/gqUTtBd.png" alt="Logo" width="174" align="center" border="0" /></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table style="font-family: trebuchet ms,geneva;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: trebuchet ms,geneva;" align="left">
<table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 2px solid #BBBBBB; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr style="vertical-align: top;">
<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="u-row-container" style="padding: 0px; background-color: transparent;">
<div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;">
<div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;">
<div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
<div style="width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
<div style="padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
<table id="u_content_text_2" style="font-family: trebuchet ms,geneva;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 35px 55px 10px; font-family: trebuchet ms,geneva;" align="left">
<div style="color: #333333; line-height: 180%; text-align: left; word-wrap: break-word;">
<p style="font-size: 14px; line-height: 180%;"><span style="font-size: 18px; line-height: 32.4px; font-family: Lato, sans-serif;"><strong><span style="line-height: 32.4px; font-size: 18px;">Hi [Admin], </span></strong></span></p>
<p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
<p style="font-size: 14px; line-height: 180%;"><span style="font-size: 18px; line-height: 32.4px;"><strong><span style="font-family: Lato, sans-serif; line-height: 32.4px; font-size: 18px;">Feedback From User ['.$username.'] .</span></strong></span></p>
<p style="font-size: 14px; line-height: 170%;"><span style="font-size: 18px; line-height: 30.6px;"> Email :'.$email.' Said : </span></p>
<p style="font-size: 14px; line-height: 170%;"><span style="font-size: 18px; line-height: 30.6px;"> '.$message.' </span></p>

<p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
<p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
</div>
</td>
</tr>
</tbody>
</table>
<table id="u_content_text_3" style="font-family: trebuchet ms,geneva;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="u-row-container" style="padding: 0px; background-color: transparent;">
<div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;">
<div class="u-col u-col-50" style="max-width: 320px; min-width: 300px; display: table-cell; vertical-align: top;">
<div style="background-color: #ffffff; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
<div style="padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
<table style="font-family: trebuchet ms,geneva;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="u-row-container" style="padding: 0px; background-color: transparent;">
<div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #04294F;">
<div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;">
<div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
<div style="width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
<div style="padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
<table style="font-family: trebuchet ms,geneva;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 35px; font-family: trebuchet ms,geneva;" align="left">
<div style="color: #ffffff; line-height: 210%; text-align: center; word-wrap: break-word;">
<p style="font-size: 14px; line-height: 210%;">&nbsp;</p>
<p style="font-size: 14px; line-height: 210%;"><span style="font-size: 16px; line-height: 33.6px;">&copy; Micro-Club | &nbsp;Room 148 Department of informatic in the USTHB</span></p>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</td>
</tr>
</tbody>
</table>

<p></p>
';
                        
                        $mail->send();

                        // Clear recipients email list  
                        $mail->ClearAddresses();
                        $mail->ClearCCs();
                        $mail->ClearBCCs();
						
						
						            //Recipients User
						
						            $mail->setFrom('microclub.verfication.usthb@gmail.com');
                        $mail->addAddress($email);            
                        //Content User
						
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'no reply';
                        $mail->Body    = '<p>&nbsp;</p>
<table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; min-width: 320px; margin: 0 auto; background-color: #7cb9e8; width: 100%;" cellspacing="0" cellpadding="0">
<tbody>
<tr style="vertical-align: top;">
<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;">
<div class="u-row-container" style="padding: 0px; background-color: transparent;">
<div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 610px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;">
<div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;">
<div class="u-col u-col-100" style="max-width: 320px; min-width: 610px; display: table-cell; vertical-align: top;">
<div style="width: 100% !important;">
<div style="padding: 0px; border: 0px solid transparent;">
<table style="font-family: sans-serif;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px 0px 10px; font-family: sans-serif;" align="left">
<table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 6px solid #6f9de1; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr style="vertical-align: top;">
<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table id="u_content_image_4" style="font-family: sans-serif;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 20px 10px; font-family: sans-serif;" align="left">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding-right: 0px; padding-left: 0px;" align="center"><img class="v-src-width v-src-max-width" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: inline-block !important; border: none; height: auto; float: none; width: 30%; max-width: 177px;" title="Logo" src="https://i.imgur.com/gqUTtBd.png" alt="Logo" width="177" align="center" border="0" /></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table style="font-family: sans-serif;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: sans-serif;" align="left">
<table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 2px solid #BBBBBB; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr style="vertical-align: top;">
<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="u-row-container" style="padding: 0px; background-color: transparent;">
<div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 610px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;">
<div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;">
<div class="u-col u-col-100" style="max-width: 320px; min-width: 610px; display: table-cell; vertical-align: top;">
<div style="width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
<div style="padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
<table id="u_content_text_2" style="font-family: sans-serif;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 35px 55px 10px; font-family: sans-serif;" align="left">
<div style="color: #000000; line-height: 180%; text-align: left; word-wrap: break-word;">
<p style="font-size: 14px; line-height: 180%;"><span style="font-size: 18px; line-height: 32.4px; font-family: Lato, sans-serif;"><strong><span style="line-height: 32.4px; font-size: 18px;">Hi ['.$username.'] !.</span></strong></span></p>
<p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
<p style="font-size: 14px; line-height: 180%;"><span style="font-family: Lato, sans-serif; font-size: 16px; line-height: 28.8px;">Thanks you for your Feedback about &copy; Micro-Club-USTHB your Feedback is being Processed by an Admin and we will be on contact with you very shortly !</span></p>
<p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
<p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
<p style="font-size: 14px; line-height: 180%; text-align: center;">Make sure to stay tuned in our socials to know the latest informations !</p>
<p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="u-row-container" style="padding: 0px; background-color: transparent;">
<div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 610px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;">
<div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;">
<div class="u-col u-col-100" style="max-width: 320px; min-width: 610px; display: table-cell; vertical-align: top;">
<div style="width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
<div style="padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
<table style="font-family: sans-serif;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 5px 10px 40px; font-family: sans-serif;" align="left">
<h2 style="margin: 0px; color: #000000; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: sans-serif; font-size: 20px;">President Phone : 0558 52 11 45<br />External Relationship Phone : 0542 17 01 14</h2>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="u-row-container" style="padding: 0px; background-color: transparent;">
<div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 610px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #04294F;">
<div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;">
<div class="u-col u-col-100" style="max-width: 320px; min-width: 610px; display: table-cell; vertical-align: top;">
<div style="width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
<div style="padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
<table style="font-family: sans-serif;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 42px 10px 15px; font-family: sans-serif;" align="left">
<div align="center">
<div style="display: table; max-width: 183px;">
<table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; margin-right: 14px;" border="0" width="32" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr style="vertical-align: top;">
<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;" align="left" valign="middle"><a title="LinkedIn" href="https://linktr.ee/microclub" target="_blank"> <img style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: block !important; border: none; height: auto; float: none; max-width: 32px !important;" title="LinkedIn" src="https://i.imgur.com/diJu1fs.png" alt="LinkedIn" width="32" /> </a></td>
</tr>
</tbody>
</table>
<table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; margin-right: 14px;" border="0" width="32" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr style="vertical-align: top;">
<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;" align="left" valign="middle"><a title="Instagram" href="https://www.instagram.com/microclub_usthb/" target="_blank"> <img style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: block !important; border: none; height: auto; float: none; max-width: 32px !important;" title="Instagram" src="https://i.imgur.com/tAqLDm7.png" alt="Instagram" width="32" /> </a></td>
</tr>
</tbody>
</table>

<table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; margin-right: 14px;" border="0" width="32" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr style="vertical-align: top;">
<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;" align="left" valign="middle"><a title="Twitter" href="https://twitter.com/club_micro" target="_blank"> <img style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: block !important; border: none; height: auto; float: none; max-width: 32px !important;" title="Twitter" src="https://i.imgur.com/OyyxhKP.png" alt="Twitter" width="32" /> </a></td>
</tr>
</tbody>
</table>
<table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; margin-right: 0px;" border="0" width="32" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr style="vertical-align: top;">
<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;" align="left" valign="middle"><a title="Facebook" href="https://www.facebook.com/Micro.Club.USTHB" target="_blank"> <img style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: block !important; border: none; height: auto; float: none; max-width: 32px !important;" title="Facebook" src="https://i.imgur.com/P7enxu2.png" alt="Facebook" width="32" /> </a></td>
</tr>
</tbody>
</table>
</div>
</div>
</td>
</tr>
</tbody>
</table>
<table style="font-family: sans-serif;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 35px; font-family: sans-serif;" align="left">
<div style="color: #ffffff; line-height: 210%; text-align: center; word-wrap: break-word;">
<p style="font-size: 14px; line-height: 210%;"><span style="font-family: sans-serif; font-size: 14px; line-height: 29.4px;"> You re receiving this email because of your recent feedback .</span></p>
<p style="font-size: 14px; line-height: 210%;"><span style="font-family:  sans-serif; font-size: 14px; line-height: 29.4px;">&copy; Micro-Club | &nbsp;Room 148 Department of informatic in the USTHB</span></p>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</td>
</tr>
</tbody>
</table>';
				$mail->send();
						
				echo "<script>alert ('Your Feedback is well received check your email for more information!');</script>";
                    } catch (Exception $e) {
                      echo "<script>alert('ERROR : Mail was Not Sent !!.');</script>";
                      echo "Mailer Error: " . $mail->ErrorInfo;
										   }   
                    echo "</div>"; 
                    $msg = "<div>Test.</div>";

					
			  }	

?>					


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="assests/images/Logo.svg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Nous</title>
    <link rel="stylesheet" href="./styles/contact.css">
    <link rel="stylesheet" href="./styles/mainpage.css">
    <link rel="stylesheet" href="./styles/index.css">


</head>

<body>
    <div class="nav-container">
        <nav class="btn">
            <ul class="mobile-nav">
                <li>
                    <div class="menu-icon-container">
                        <div class="menu-icon ">
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="link-logo"></a>
                </li>
            </ul>

            <ul class="desktop-nav">
                <li style="position: absolute;
                left: 0;">
                    <a href="#" class="link-logo"></a>
                </li>
                <li>
                    <a href="./index.php" class="hovereffect first scroll" data-menu-name="Acceuil">Acceuil</a>
                </li>
                <li>
                    <a href="./presentation.php" class="hovereffect" data-menu-name="Présentation">Présentation</a>
                </li>

                <li>
                    <a href="./evenement.php" class="hovereffect scroll" data-menu-name="Evénements">Evénements</a>
                </li>
                <li>
                    <a href="#" class="hovereffect scroll" data-menu-name="Contact">Contact</a>
                </li>
                <li>
                    <a href="./inscription.php" class="btnSignin"><span>S'inscrire</span> </a>
                </li>

            </ul>
        </nav>
    </div>
    <div class="contactWrapper">
        <img id="sun" src="./assests/images/sun.png" alt="">
        <img id="Cloud" src="./assests/images/Cloud.png" alt="">
        <div class="flexwrap">
            <div class="contactContainer">


                <form action="" method="post" class="inputsContact">
                    <label>Contactez-nous :</label>
                    <div class="inputsContact">
                    <input type="text" name="name" class="contactInput" placeholder="Nom" title="name should only contain letters eg. ahmed" minlength="4" maxlength="50" required>
                    <input type="email" name="email" class="contactInput" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    <textarea class="contactInput" name="message" placeholder="Message !" minlength="4" maxlength="1000" required></textarea>
                    <input type="submit" name="submit" value="Envoyer">
                    </div>
                </form>
                <div class="infoContainer">
                    <div>
                        <h2>Email:</h2>
                        <p>micro-club@usthb.dz</p>
                    </div>
                    <div>
                        <h2>Téléphone du présidents</h2>
                        <p>0558 52 11 45</p>
                    </div>
                    <div>
                        <h2>Localistation</h2>
                        <p>Salle 148 Département informatique à l’USTHB</p>
                    </div>
                    <div>
                        <h2>Trouvez-nous sur</h2>
                        <ul class="socials">
                            <li class="social">
                                <a href="https://www.facebook.com/Micro.Club.USTHB/photos/" target="_blank"><img src="./assests/images/fb.png" alt=""></a>
                            </li>
                            <li class="social">
                                <a href="https://www.instagram.com/microclub_usthb/?hl=fr" target="_blank"><img src="./assests/images/ig.png" alt=""></a>
                            </li>
                            <li class="social">
                                <a href="https://www.linkedin.com/company/micro-club/?originalSubdomain=dz" target="_blank"><img src="./assests/images/linked.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2>GPS</h2>

                        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12792.319044831096!2d3.185523!3d36.7206456!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2b982194dc321c1d!2sMicro%20Club!5e0!3m2!1sfr!2sdz!4v1652767964820!5m2!1sfr!2sdz"
                                width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>


                </div>
            </div>

        </div>
    </div>

    <script src="./js/index.js"></script>

</body>

</html>