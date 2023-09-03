<?php 
$name = $_POST['name'];
$email =$_POST['email'];
$message = $_POST['message'];

$to = "rupagupta0904@gmail.com";

$subject = "Mail From Personal Website"

$txt = "Name =". $name ."\r\n Email = ". $email . "\r\n Message = ". $message . ;

if($email != Null){
    mail($to, $Subject, $txt,)
}
?>