<?php

if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
     $secretAPIkey = '6LfH_YspAAAAAK4K622tFNY-s6T9XVyfl2vMMJ64';
     $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_POST['g-recaptcha-response']);
     $response = json_decode($verifyResponse);

          if($_POST['fname']){
               $fname = $_POST['fname'];
          }elseif($_POST['f_name']){
               $fname = $_POST['f_name'];
          }elseif($_POST['first_name']){
               $fname = $_POST['first_name'];
          }

          if($_POST['lname']){
               $lname = $_POST['lname'];
          }elseif($_POST['l_name']){
               $lname = $_POST['l_name'];
          }elseif($_POST['last_name']){
               $lname = $_POST['last_name'];
          }
          
          if($_POST['email']){
               $email = $_POST['email'];
          }elseif($_POST['e-mail']){
               $email = $_POST['e-mail'];
          }elseif($_POST['email_address']){
               $email = $_POST['email_address'];
          }
         
          if($_POST['phone']){
               $phone = $_POST['phone'];
          }elseif($_POST['phone_num']){
               $phone = $_POST['phone_num'];
          }elseif($_POST['phone_number']){
               $phone = $_POST['phone_number'];
          }
         
          if($_POST['help']){
               $help_you = $_POST['help'];
          }elseif($_POST['help_you']){
               $help_you = $_POST['help_you'];
          }elseif($_POST['how_can_help']){
               $help_you = $_POST['how_can_help'];
          }
         

          if(!empty($fname) && !empty($email) && !empty($phone) && !empty($help_you)){
               $cookie_name = "userdetails";
               $cookie_value = "true";
               setcookie($cookie_name,$cookie_value, time()+ 2 * 365 * 24 * 60 * 60); 

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
               $mail = mail($to,$subject,$message1,$headers);

               $response = array('success' => true, 'msg'=> 'Your request successfully submitted');
          }
          print_r(json_encode($response));
     }

?>