<?php

require_once('PHPMailer/PHPMailerAutoload.php');
require_once('send_email.php');

if(isset($_POST['btn_contact']))
{


    $fullname = htmlspecialchars($_POST['fullname'], ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');

   

    if($fullname == '')
    {
        $error = "Name is required";
        include('contact.php');
        exit;
    }

    if($message == '')
    {
        $error = "Message is required";
        include('contact.php');
        exit;
    }

    if($email == '')
    {
        $error = "Email is required";
        include('contact.php');
        exit;
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $error = "Invalid email format";
        include('contact.php');
        exit;
    }

    if($phone == '')
    {
        $error = "Phone is required";
        include('contact.php');
        exit;
    }

    
    $type = 'Contact Us';
    $to = 'admin@ppnl.com.ng';
    $subject = 'A new message from Contact US';
    $from = "From: admin@ppnl.com.ng";
    $message = '<b>User Information</b><br><br>'

    .'Fullname: '.$fullname.'<br><br>'
    .'Phone: '.$phone.'<br><br>'
    .'Email: '.$email.'<br><br>'
    .'Message: '.$message.'<br><br>';
                               
    send_email($to, 'admin@ppnl.com.ng', $subject, $message, $type);
    $success = "Your information has been successfully sent, we would get back to you shortly";
    include('thankyou.php');
    exit;


}
else
{
    echo 'Error';
    exit;
}

?>