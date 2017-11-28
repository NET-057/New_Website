<?php

if(isset($_POST['name']) && isset($_POST['contact']) && isset($_POST['email']) && isset($_POST['select']))
{
     $name = $_POST['name'];
     $contact = $_POST['contact'];
     $email = $_POST['email'];
     $select = $_POST['select'];
     $message = $_POST['message'];

     if(!empty($name) && !empty($contact) && !empty($email) && !empty($select) )
     {
          $data = fopen('data/simple.txt','a');
          $sample = "Name -  $name "."\r\n"."Contact -  $contact "."\r\n"."Email -  $email "."\r\n"."Course - $select "."\r\n"."Message -  $message "."\r\n"."\r\n"."\r\n";
          fwrite($data, $sample);
         
     }
      header('Location: register.html');
       
}



?>