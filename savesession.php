<?php
     if(isset($_POST)){
          session_set_cookie_params(0);
          session_start();

          $_SESSION['data'] = 'yes';

          $success = true;
          print_r($success);
     }
?>