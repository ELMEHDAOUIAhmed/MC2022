<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // session_start();
    // if (isset($_SESSION['SESSION_EMAIL'])) {
    //     header("Location: inscription.php");
    //     die();
    // }

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    include 'config.php';
    $msg = "";

    if (isset($_POST['submit'])) {

        $mat = mysqli_real_escape_string($conn, $_POST['mat']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $surname= mysqli_real_escape_string($conn, $_POST['surname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $study = mysqli_real_escape_string($conn, $_POST['study']);
        $spec = mysqli_real_escape_string($conn, $_POST['spec']);
        $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);
        $motif = mysqli_real_escape_string($conn, $_POST['motif']);
        $motif_1= mysqli_real_escape_string($conn, $_POST['motif_1']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));
        $code = mysqli_real_escape_string($conn, md5(rand()));

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM mc_users WHERE mat='{$mat}'")) > 0) {
            $msg = "<div class='msg_erreur'>{$mat} -- Ce matricule existe déjà , si vous pensez que c'est une erreur de notre part , contactez-nous sur : micro-club@usthb.dz </div>";
        }

        else if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM mc_users WHERE email='{$email}'")) > 0) {
            $msg = "<div class='msg_erreur'>{$email} - Cet Email existe déjà !.</div>";
        } else {
            if ($password === $confirm_password) {
                $sql = "INSERT INTO `mc_users`(`mat`, `name`, `surname`, `email`, `phone`, `study`, `spec`, `faculty`, `motif`,`motif_1`, `password`,`code`) VALUES ('{$mat}','{$name}','{$surname}','{$email}','{$phone}','{$study}','{$spec}','{$faculty}','{$motif}','{$motif_1}','{$password}','{$code}') ";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo "<div style='display: none;'>";
                    //Create an instance; passing `true` enables exceptions
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

                        $query = mysqli_query($conn,"SELECT * FROM `mc_users` WHERE `id`=(SELECT MAX(`id`) FROM mc_users)"); // get the last id in mc_users table
                        if (mysqli_num_rows($query) > 0) {
                        $row = mysqli_fetch_assoc($query);
                        }


                        //Recipients Admin

                        $mail->setFrom('microclub.verfication.usthb@gmail.com');
                        $email_1='microclub.verfication.usthb@gmail.com';
                        $mail->addAddress($email_1);
                         //Content Admin
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Verification Link Approval for New Users';
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
                        <p style="font-size: 14px; line-height: 180%;"><span style="font-size: 18px; line-height: 32.4px;"><strong><span style="font-family: Lato, sans-serif; line-height: 32.4px; font-size: 18px;">Information About User Number # '.$row['id'].' .</span></strong></span></p>
                        <ul>
                        <li style="font-size: 14px; line-height: 25.2px;"><span style="font-size: 16px; line-height: 28.8px;">Matricule = '.$mat.' .</span></li>
                        <li style="font-size: 14px; line-height: 25.2px;"><span style="font-size: 16px; line-height: 28.8px;">Email Address : '.$email.' .</span></li>
                        <li style="font-size: 14px; line-height: 25.2px;"><span style="font-size: 16px; line-height: 28.8px;">Name : '.$name.' .</span></li>
                        <li style="font-size: 14px; line-height: 25.2px;"><span style="font-size: 16px; line-height: 28.8px;">Surname : '.$surname.' .</span></li>
                        <li style="font-size: 14px; line-height: 25.2px;"><span style="font-size: 16px; line-height: 28.8px;">Year of study : '.$study.' .&nbsp;</span></li>
                        <li style="font-size: 14px; line-height: 25.2px;"><span style="font-size: 16px; line-height: 28.8px;">Faculty : '.$faculty.' .</span></li>
                        <li style="font-size: 14px; line-height: 25.2px;"><span style="font-size: 16px; line-height: 28.8px;">Speciality : '.$spec.' .&nbsp;</span></li>
                        <li style="font-size: 14px; line-height: 25.2px;"><span style="font-size: 16px; line-height: 28.8px;">Phone Number : +213 '.$phone.' .</span></li>
                        <li style="font-size: 14px; line-height: 25.2px;"><span style="font-size: 16px; line-height: 28.8px;">What do you Expect From MC paragraph : </span><span style="font-size: 16px; line-height: 28.8px;">'.$motif.'</span></li>
                        <li style="font-size: 14px; line-height: 25.2px;"><span style="font-size: 16px; line-height: 28.8px;">Why should we Choose you paragraph : : </span><span style="font-size: 16px; line-height: 28.8px;">'.$motif_1.'</span></li>
                        </ul>
                        <p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
                        <p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
                        </div>
                        </td>
                        </tr>
                        </tbody>
                        </table>
                        <table id="u_content_text_3" style="font-family: trebuchet ms,geneva;" border="0" width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 55px 40px; font-family: trebuchet ms,geneva;" align="left">
                        <div style="line-height: 170%; text-align: left; word-wrap: break-word;">
                        <p style="font-size: 14px; line-height: 170%; text-align: center;"><span style="font-size: 18px; line-height: 30.6px;">For Request Approval or Refusal</span></p>
                        <p style="font-size: 14px; line-height: 170%; text-align: center;"><span style="font-size: 18px; line-height: 30.6px;"> Click either of the links&nbsp; below !</span></p>
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
                        <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                        <div style="border-collapse: collapse; display: table; width: 100%; background-color: transparent;">
                        <div class="u-col u-col-50" style="max-width: 320px; min-width: 300px; display: table-cell; vertical-align: top;">
                        <div style="background-color: #ffffff; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                        <div style="padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
                        <table style="font-family: trebuchet ms,geneva;" border="0" width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: trebuchet ms,geneva;" align="left">
                        <div align="center"> <a style="box-sizing: border-box; display: inline-block; font-family: trebuchet ms,geneva; text-decoration: none; -webkit-text-size-adjust: none; text-align: center; color: #ffffff; background-color: #e03e2d; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; width: 55%; max-width: 100%; overflow-wrap: break-word; word-break: break-word; word-wrap: break-word; mso-border-alt: none;" href="TBD" target="_blank"> <span style="display: block; padding: 10px 20px; line-height: 120%;"><span style="font-size: 16px; line-height: 19.2px;">Refuse !</span></span> </a> </div>
                        </td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        </div>
                        </div>
                        
                        <div class="u-col u-col-50" style="max-width: 320px; min-width: 300px; display: table-cell; vertical-align: top;">
                        <div style="background-color: #ffffff; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                        <div style="padding: 0px; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border: 0px solid transparent;">
                        <table style="font-family: trebuchet ms,geneva;" border="0" width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px; font-family: trebuchet ms,geneva;" align="left">
                        <div align="center"> <a style="box-sizing: border-box; display: inline-block; font-family: trebuchet ms,geneva; text-decoration: none; -webkit-text-size-adjust: none; text-align: center; color: #ffffff; background-color: #2dc26b; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; width: 55%; max-width: 100%; overflow-wrap: break-word; word-break: break-word; word-wrap: break-word; mso-border-alt: none;" href="http://localhost/MicroClub-Project/?verification='.$code.'" target="_blank"> <span style="display: block; padding: 10px 27px; line-height: 120%;"><span style="font-size: 16px; line-height: 19.2px;">Approve!</span></span> </a> </div>
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
                        $mail->Body    = '
                        <p>&nbsp;</p>
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
<p style="font-size: 14px; line-height: 180%;"><span style="font-size: 18px; line-height: 32.4px; font-family: Lato, sans-serif;"><strong><span style="line-height: 32.4px; font-size: 18px;">Hi ['.$name.' ,'.$surname.' ] !.</span></strong></span></p>
<p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
<p style="font-size: 14px; line-height: 180%;"><span style="font-family: Lato, sans-serif; font-size: 16px; line-height: 28.8px;">Thanks for Applying to &copy; Micro-Club-USTHB your Application is being Processed by an Admin and we will be on contact with you very shortly !</span></p>
<p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
<p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
<p style="font-size: 14px; line-height: 180%; text-align: center;">Make sure to stay tuned in our socials to know when the Selection Starts and if you were accepted !</p>
<p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
<ul style="list-style-type: square;">
<li style="font-size: 16px; line-height: 25.2px;"><strong>You are User Number # '.$row['id'].' .</strong></li>
<li style="font-size: 14px; line-height: 25.2px;"><span style="font-family: Lato, sans-serif; font-size: 16px; line-height: 28.8px;"><strong>There are currently '.$row['id'].' Users awaiting Approval</strong></span></li>
</ul>
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
<p style="font-size: 14px; line-height: 210%;"><span style="font-family: sans-serif; font-size: 14px; line-height: 29.4px;"> You re receiving this email because of your recent signup .</span></p>
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
                       
                        

                        echo 'Message has been sent';
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                    echo "</div>";
                    $msg = "<div class='validemsg'>Votre demande à bien été envoyé et elle sera traité dans les proches délai Verifier votre email!</div> ";
                    echo '<script type="text/javascript"> down(); </script>';



                } else {
                    $msg = "<div class='msg_erreur'>Oups , une erreur c'est produite!.</div>";
                }
            } else {
                
                $msg = "<div class='msg_erreur'>Le Mot de passe et la confirmation de mot de passe ne sont pas identique!</div>";
            }
        }
    }




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="assests/images/Logo.svg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrivez-vous</title>
    <link rel="stylesheet" href="./styles/inscription.css">
    <link rel="stylesheet" href="./styles/mainpage.css">
    <link rel="stylesheet" href="./styles/index.css">

    <script src="./js/index.js"></script>
</head>

<body style="background-color:#8AB7D2 ;">
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
                    <a href="./contact.php" class="hovereffect scroll" data-menu-name="Contact">Contact</a>
                </li>
                <li>
                    <a class="btnSignin"><span>S'inscrire</span> </a>
                </li>

            </ul>
        </nav>
    </div>

    <div class="subContainer">

        <div class="subTextContainer">
            <span>Pourquoi hésiter?</span>
            <h1 class="welcomeTitle">Inscrivez-vous !
                <div class="yellowline subline"></div>
            </h1>



        </div>

    </div>
    <div class="subFormContainer">
    <form action="" method="post">

            <div class="containerr">
                
                <div class="first">
                    <input type="tel" class="subInput"   name="mat" placeholder="Enter Your Matricule eg. 2121xxxxx" pattern="[0-9]{12}"  title="Matricule doit être, pas plus pas moins de 12 chiffres" required>
                    <input type="text" class="subInput" name="name" placeholder="Nom"  title= "Le nom ne doit contenir que des lettres eg. ahmed" minlength="4" maxlength="30"
                                onkeydown="return /[a-z, ]/i.test(event.key)" onblur="if (this.value == '') {this.value = '';}"
                                onfocus="if (this.value == '') {this.value = '';}"  required>
                    <input type="tel" class="subInput" name="phone" placeholder="Numéro de téléphone eg.0123-456-789" pattern="[0-9]{10}" required>
                    
                    <select class="subInput" name="study" id="">
                    <option value="" disabled selected>Années d'études</option>
                    <option value="L1">L1</option>
                    <option value="L2">L2</option>
                    <option value="L3">L3</option>
                    <option value="M1">M1</option>
                    <option value="M2">M2</option>
                </select>
                    
                    <textarea style="height: 120px;" class="subInput " type="text" name="motif" placeholder="Qu’attendez-vous de ©Micro Club-USTHB?" maxlength ="1000" required></textarea>
                    
                    <input type="password" class="subInput" name="password" placeholder="Mot de passe" title="le mot de passe doit contenir 9 caractères ou plus qui sont au moins un chiffre et une lettre majuscule et minuscule" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{9,}" required>
                </div>
                <div class="second">

                <input type="email" class="subInput" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

                <input type="text" class="subInput" name="surname" placeholder="Prénom" title= "Le Nom ne doit contenir que des lettres minuscules eg. elmhedaoui" minlength="4" maxlength="30"
                                onkeydown="return /[a-z, ]/i.test(event.key)" onblur="if (this.value == '') {this.value = '';}"
                                onfocus="if (this.value == '') {this.value = '';}"  required>


                    <select class="subInput" name="faculty" id=""required>
                        <option value="" disabled selected>Choisissez votre Faculté :</option>
                        <option value="Mathematiques">Mathematiques</option>
                        <option value="Sciences Biologiques">Sciences Biologiques</option>
                        <option value="Genie Mecanique et Genie des Procedes">Genie Mecanique et Genie des Procedes</option>
                        <option value="Sciences de la terre et de Geographie">Sciences de la terre et de Geographie</option>
                        <option value="Physique">Physique</option>    
                        <option value="Chimie">Chimie</option>    
                        <option value="Informatique">Informatique</option> 
                        <option value="Genie electrique">Genie electrique</option>    
                        <option value="Genie Civil">Genie Civil</option>   
                        </select>
                <input type="text" class="subInput" name="spec" placeholder="Spécialité" minlength="3" required>

                <textarea style="height: 120px;" class="subInput" name="motif_1" placeholder="Pourquoi doit-on vous choisir ?" maxlength ="1000" required></textarea>
                <input type="password" class="subInput" name="confirm-password" placeholder="Confirmer le mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{9,}" required>
                </div>
            </div>
            <input class="subSubmit" type="submit" name="submit" value="S'inscrire !">
            <?php echo $msg; ?>


            




        </form>


</body>

</html>