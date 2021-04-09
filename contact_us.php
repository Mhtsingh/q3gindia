<?php

include "include.php";

function email_validation($str) {
    return (!preg_match(
                    "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str)) ? FALSE : TRUE;
}

if ($_POST['name'] != "" && $_POST['email'] != "" && $_POST['contact'] != "") {
   
    $numlength = strlen((string) $_POST['contact']);

   
    if ($numlength >= 10) {

        if (!email_validation($_POST['email'])) {

            $result['error'] = "1";
            $result['error_msg'] = "Invalid email address.";
        } else {
         
  include "mails/thankyou.php";
        //  sendmail1($email_from, 'support@q3gindia.com', "Subject :" .$_POST['subject'] , "User Details : " . $_POST['name'] . " " . $_POST['email'] . " " . $_POST['contact']." <br/> Message : ". $_POST['message']);
          //sendmail1($email_from, 'navdeep.kaur@dharcorp.com', "Subject :" .$_POST['subject'] , "User Details : " . $_POST['name'] . " " . $_POST['email'] . " " . $_POST['contact']." <br/> Message : ". $_POST['message']);
           sendmail1($email_from, 'support@q3gindia.com', "Received a new contact Information" , $email_thankyou);
           sendmail1($email_from, 'navdeep.kaur@dharcorp.com', "Subject :" .$_POST['subject'] , $email_thankyou);
          //  sendmail1($email_from, 'navi.sandhu22@yahoo.in', "Subject :" .$_POST['subject'] , "dfjhfh");
            $result['error'] = "0";
            $result['error_msg'] = "Thank you for submitting your request!.";
        }
    } else {
        $result['error'] = "1";
        $result['error_msg'] = "Contact Number needs to be 10 digit or more";
    }
} else {
    $result['error'] = "1";
    $result['error_msg'] = "Please provide Required Information.";
}

echo json_encode($result);
?>
