<?php
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];

    $to='lailamatar10@gmail.com';
    $subject='Form submission';
    $message="Name : " .$name."\n"."phone: ".$phone."\n". "wrote the following: "."\n\n".$msg;
    $headers="Form: ".$email;
   
}
?>