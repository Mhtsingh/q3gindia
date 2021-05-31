<?php

include "include_1.php";
//include "include.php";

function email_validation($str) {
    return (!preg_match(
                    "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str)) ? FALSE : TRUE;
}

if ($_POST['fullName'] != "" && $_POST['inputEmail'] != "" && $_POST['mobileNumber'] != "") {
   
    $numlength = strlen((string) $_POST['mobileNumber']);

   
    if ($numlength >= 10) {

        if (!email_validation($_POST['inputEmail'])) {

            $result['error'] = "1";
            $result['error_msg'] = "Invalid email address.";
        } else {
            
            
            $o1->name = $_POST['fullName'];
            $o1->email = $_POST['inputEmail'];
            $o1->subject = $_POST['emailSubject'];
            $o1->mobile = $_POST['mobileNumber'];
            $o1->experience_to = $_POST['totalExperience'];
            $o1->experience_from = $_POST['sel1'];
            $o1->resume_file = $_POST['formFile'];
            $o1->post_id= $_POST['form_job_id'];
            $o1->created_at= todaysDate();
            $o1->updated_at= todaysDate();
            $o1->status="New Request";
            $o1->is_active= "1";
            
     if ($_FILES['formFile']['name'] != "") {
        $ext = explode(".", $_FILES['formFile']['name']);

        $tmpfile = $_FILES['formFile']['tmp_name'];
        $source = "assets/Images";
        $destination = "formFile" . time() . "." . end($ext);
        $thumbnail = 0;
        $newsize = 400;
        $watermark = 'Q3';
        uploadimage($tmpfile, $source, $destination, $thumbnail, $newsize, $watermark);
        $o1->resume_file = $destination;
    }
     $o1->application_id = $insertor->insert_object($o1, "applications");
            
         
  //include "mails/thankyou.php";
        //  sendmail1($email_from, 'support@q3gindia.com', "Subject :" .$_POST['subject'] , "User Details : " . $_POST['name'] . " " . $_POST['email'] . " " . $_POST['contact']." <br/> Message : ". $_POST['message']);
          //sendmail1($email_from, 'navdeep.kaur@dharcorp.com', "Subject :" .$_POST['subject'] , "User Details : " . $_POST['name'] . " " . $_POST['email'] . " " . $_POST['contact']." <br/> Message : ". $_POST['message']);
           sendmail1($email_from, 'support@q3gindia.com', "Received a new contact Information" , $email_thankyou);
           sendmail1($email_from, 'navdeep.kaur@dharcorp.com', "Subject :" .$_POST['subject'] , $email_thankyou);
          //  sendmail1($email_from, 'navi.sandhu22@yahoo.in', "Subject :" .$_POST['subject'] , "dfjhfh");
            $result['error'] = "0";
            $result['error_msg'] = "Thank you for submitting your resume!.";
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
