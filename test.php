<?php
include "include.php";
$_POST['name'] = "Navdeep kaur";
$_POST['email'] = "Navdeep kaur";
$_POST['contact'] = "Navdeep kaur";
$_POST['subject'] = "Navdeep kaur";
$_POST['message'] = "Navdeep kaur";

//include "mails/thankyou.php";
include "mails/thankyou.php";
include "mails/thankyou.php";

sendmail1($email_from, 'navi.sandhu22@yahoo.in', "Subject :", " Hello , <br/> User Details :<br/> Name :<br/> Email : <br/> Mobile :  <br/> Message :  <br/> Thank You");

//  sendmail2($email_from, 'support@q3gindia.com', "Subject :" .$_POST['subject'] , "User Details : " . $_POST['name'] . " " . $_POST['email'] . " " . $_POST['contact']." <br/> Message : ". $_POST['message']);
sendmail1($email_from, 'navi.sandhu22@yahoo.in', "Subject :", $thankyou);
?>
