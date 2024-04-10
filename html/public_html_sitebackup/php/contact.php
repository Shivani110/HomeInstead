<?php

if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $secretAPIkey = '6LccWoApAAAAALKznrYdY3DoTjdVj6PMghKFBtgQ';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_POST['g-recaptcha-response']);
    $response = json_decode($verifyResponse);

  	$fname = $_POST['fname'];
  	$lname = $_POST['lname'];
  	$email = $_POST['email'];
  	$phone = $_POST['phone_number'];
  	$about = $_POST['about'];

     if(!empty($email) && !empty($phone) && !empty($about) && !empty($fname) && !empty($lname)){
       $to = $email;
       $subject = "New Enquiry from home instead contact form";
       $message1 = '<!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
       </head>
       <body>
            <div id="email" style="width:600px; margin:auto; background:white;">
            <table role="presentation" width="100%">
            <tr>
            <td style="padding: 30px 30px; background:#EAF0F6; align:center">
            <h2 style="font-size: 28px; margin:0 0 20px 0; font-family:Arial;">Someone just sent an enquiry</h2>
            <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial">First Name: '.$fname.'</p>
            <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial">Last Name: '.$lname.'</p>
            <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial">Email: '.$email.'</p>
            <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial">Phone number: '.$phone.'</p>
            <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial">How can we help you: '.$about.'</p>
            <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial">Thank You</p>
            </td>
            </tr>
            </table>
            </div>
       </body>
       </html>';

       $headers = "MIME-Version: 1.0" . "\r\n";
       $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
       /*$headers .= 'From: sagmetic.com' . "\r\n";*/

       $mail = mail($to,$subject,$message1,$headers);
       
       $response = array('success'=> true, 'msg' =>'Successfully submitted your request');

      }

    print_r(json_encode($response));
 }
?>