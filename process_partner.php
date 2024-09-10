<?php

require_once('PHPMailer/PHPMailerAutoload.php');
require_once('send_email.php');

if(isset($_POST['btn_partner']))
{


    $fullname = htmlspecialchars($_POST['fullname'], ENT_QUOTES, 'UTF-8');
    $position = htmlspecialchars($_POST['position'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');

    $company_name = htmlspecialchars($_POST['company_name'], ENT_QUOTES, 'UTF-8');
    $country = htmlspecialchars($_POST['country'], ENT_QUOTES, 'UTF-8');
    $industry = htmlspecialchars($_POST['industry'], ENT_QUOTES, 'UTF-8');
    $website = htmlspecialchars($_POST['website'], ENT_QUOTES, 'UTF-8');
    $address = htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8');

    $list_of_products = htmlspecialchars($_POST['list_of_products'], ENT_QUOTES, 'UTF-8');

    if($fullname == '')
    {
        $error = "Fullname is required";
        include('becomeourpartner.php');
        exit;
    }

    if($position == '')
    {
        $error = "Position is required";
        include('becomeourpartner.php');
        exit;
    }

    if($email == '')
    {
        $error = "Email is required";
        include('becomeourpartner.php');
        exit;
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $error = "Invalid email format";
        include('becomeourpartner.php');
        exit;
    }



    if($phone == '')
    {
        $error = "Phone is required";
        include('becomeourpartner.php');
        exit;
    }

    if($company_name == '')
    {
        $error = "Company name is required";
        include('becomeourpartner.php');
        exit;
    }

    if($country == '')
    {
        $error = "Country is required";
        include('becomeourpartner.php');
        exit;
    }

    if($industry == '')
    {
        $error = "Industry is required";
        include('becomeourpartner.php');
        exit;
    }

    if($website == '')
    {
        $error = "Website address is required";
        include('becomeourpartner.php');
        exit;
    }
    if($address == '')
    {
        $error = "Contact address is required";
        include('becomeourpartner.php');
        exit;
    }

    if($list_of_products == '')
    {
        $error = "List of product is required";
        include('becomeourpartner.php');
        exit;
    }

    $type = 'Become our partner';
    $to = 'admin@ppnl.com.ng';
    $subject = 'A new message from Become our partner';
    $from = "From: admin@ppnl.com.ng";
    $message = '<b>User Information</b><br><br>'

    .'Fullname: '.$fullname.'<br><br>'
    .'Position: '.$position.'<br><br>'
    .'Email: '.$email.'<br><br>'
    .'Phone: '.$phone.'<br><br>'

    .'<b>Company Details: '.'</b><br><br>' 
    .'Company Name: '.$company_name.'<br><br>'
    .'Country: '.$country.'<br><br>'
    .'Website Address: '.$website.'<br><br>'
    .'Industry: '.$industry.'<br><br>'
    .'Contact Address: '.$address.'<br><br>'

    .'<b>Product/Partnership Details: '.'</b><br><br>'
    .'List of products: '.$list_of_products."\n";
                            
    
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