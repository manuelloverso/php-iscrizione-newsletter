<?php
function isAnEmail($email){
    if (str_contains($email , '@') && str_contains($email , '.')) {
      return true;
    }
    return false;
  }
  
  function showMessage($bool){
      if ($bool == true) {
        header('Location: ./thankyou.php');
          return [
             "status" => "Thank You! You've succesfully subscribed to the newsletter",
             "class" => "success"  
          ];
      }
      return [
          "status" => "Wrong email, try again",
          "class" => "danger"  
       ];
  }