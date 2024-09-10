<?php

require_once('PHPMailer/PHPMailerAutoload.php');
require_once('send_email.php');

if(isset($_POST['btn_submit']))
{


    $fullname = htmlspecialchars($_POST['fullname'], ENT_QUOTES, 'UTF-8');
    $position = htmlspecialchars($_POST['position'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');

    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');

    $company_name = htmlspecialchars($_POST['company_name'], ENT_QUOTES, 'UTF-8');
    $country = htmlspecialchars($_POST['country'], ENT_QUOTES, 'UTF-8');
    $city = htmlspecialchars($_POST['city'], ENT_QUOTES, 'UTF-8');
    $website = htmlspecialchars($_POST['website'], ENT_QUOTES, 'UTF-8');

    $quote_details = htmlspecialchars($_POST['quote_details'], ENT_QUOTES, 'UTF-8');

    if($fullname == '')
    {
        $error = "Fullname is required";
        include('raq.php');
        exit;
    }

    if($position == '')
    {
        $error = "Position is required";
        include('raq.php');
        exit;
    }

    if($email == '')
    {
        $error = "Email is required";
        include('raq.php');
        exit;
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $error = "Invalid email format";
        include('raq.php');
        exit;
    }



    if($phone == '')
    {
        $error = "Phone is required";
        include('raq.php');
        exit;
    }

    if($company_name == '')
    {
        $error = "Company name is required";
        include('raq.php');
        exit;
    }

    if($country == '')
    {
        $error = "Country is required";
        include('raq.php');
        exit;
    }

    if($city == '')
    {
        $error = "City is required";
        include('raq.php');
        exit;
    }

    if($website == '')
    {
        $error = "Website address is required";
        include('raq.php');
        exit;
    }

    if($quote_details == '')
    {
        $error = "Quote details is required";
        include('raq.php');
        exit;
    }

    $type = 'Request a quote';
    $to = 'admin@ppnl.com.ng';
    $subject = 'A new message from Request a quote';
    $from = "From: admin@ppnl.com.ng";
    $message = '<b>User Information</b><br><br>'

    .'Fullname: '.$fullname.'<br><br>'
    .'Position: '.$position.'<br><br>'
    .'Email: '.$email.'<br><br>'
    .'Phone: '.$phone.'<br><br>'

    .'<b>Company Details: '.'</b><br><br>' 
    .'Company Name: '.$company_name.'<br><br>'
    .'Country: '.$country.'<br><br>'
    .'City: '.$city.'<br><br>'
    .'Website Address: '.$website.'<br><br>'

    .'<b>RFQ information: '.'</b><br><br>'
    .'Quote Details: '.$quote_details."\n";
                            
    
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