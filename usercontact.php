<?php 
     if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
          $secretAPIkey = '6Ldqb4EpAAAAALVGPbuDSHPNHAtQgGJ9i5JgKUO8';
          $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_POST['g-recaptcha-response']);
          $response = json_decode($verifyResponse);

          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $email = $_POST['email'];
          $phone = $_POST['phone_number'];
          $about = $_POST['about'];

          if(!empty($email) && !empty($phone) && !empty($about) && !empty($fname)){
               $to = $email;
               $subject = "Contact mail";
               $message1 = '<!DOCTYPE html>
               <html lang="en">
               <head>
                   <meta charset="UTF-8">
                   <meta http-equiv="X-UA-Compatible" content="IE=edge">
                   <meta name="viewport" content="width=device-width, initial-scale=1.0">
                   <title>Contact Us</title>
               </head>
               <body>
                   <p>Hi</p>
                   <h3>'.$email.'</h3>
               </body>
               </html>';

               $headers = "MIME-Version: 1.0" . "\r\n";
               $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

               $headers .= 'From: sagmetic.com' . "\r\n";
               $mail = mail($to,$subject,$message1,$headers);
               
               session_start();

               $_SESSION['success'] = "Mail successfully send";
              
          }else{
               session_start();

               $_SESSION['error'] = "The phone number, email,How can we help you? fields are required";
          }

          header("Location: html/index.php");
     }

   
?>