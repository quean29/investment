<?php

// make sure you have the PHPMailer folder on your host
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    #$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = '';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('support@j.com', 'Lancie');
    $mail->addAddress('quean29@gmail.com');     //Add a recipient quean29@gmail.com preciouxxploit@gmail.com
    $mail->addCC('ejiro@yahoo.com');  // not really necessary

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Transaction Receipt';
    $mail->Body    = '<body style="background-color:grey">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #fff;">
        <tbody style="background-color: rgb(233, 231, 231);">
            <tr>
                <td style="height: 150px; padding: 20px; background-color: rgb(233, 231, 231);">
                    <img src="https://lunikdata.com/alfa.png" alt="logo" width="80">
                    <p style="text-align: left; align-items: center; border: 2px solid #fff; background-color: #fff; padding: 12px; margin-bottom: 0;">Hello Jeff, <br> <br>
                        Here\'s your receipt for your membership purchase with reference <b>66NYQGKE</b>. Your transaction information has been included in this receipt. Thanks!
                    </p>

                    <p style="text-align: left; align-items: center; border-top: 1px solid #fff; background-color: #fff; padding: 12px; margin-top: 0; margin-bottom: 0;">
                        <span>Amount</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <span>Paid Via</span> <br>
                        <span><b>$69</b></span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span><b>Other</b></span>
                    </p>

                    <p style="text-align: left; align-items: center; border-top: 1px solid #fff; background-color: #fff; padding: 12px; margin-top: 0;">
                        <span>Date</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span>Narration</span> <br>
                        <span style="font-size: smaller;"><b>11.09.2022, 12:49pm</b></span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="font-size: smaller;"><b>Membership purchase</b></span>
                        <br> <br> <b>We\'re here for you</b>. If you need assistance, simply reply to this email and we\'ll get right back
                    </p>

                    <p style="text-align: center; align-items: center; background-color: rgb(233, 231, 231); padding: 12px;">Sent with &#9829; from Lanice <br> © 2022.
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</body>';
    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}