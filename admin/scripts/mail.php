<?php

  function redirect_to($location) {
    if($location != NULL){ //if location has something inside of it
      header("Location: {$location}"); //
      exit;
    }
  }

  function submitMessage($name, $email, $message, $direct) { //will not work in mamp - not set up for email
      $to = "juliapeden@juliapeden.com";
      $subj = "Message from customer submitted via juliapeden.com";
      $extra = "Reply-To: ".$email; //to let you reply properly - optional
      $msg = "Name: ".$name."\n\nEmail: ".$email."\n\nComments: ".$message; //putting everything nicely packages together in msg
      //mail($to,$subj,$msg,$extra);
      $direct = $direct."?name={$name}";
      redirect_to($direct);
  }
 ?>
