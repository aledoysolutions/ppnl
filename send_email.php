<?php

function send_email($to,$fromName,$subject,$message,$type)
{

// Mail Template
$mailcontent  = '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:500,700,400,300" type="text/css">
      <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
</head>

<body style="font-family: Calibri;">
<div style="width:100%; background-color:#FFF; padding:20px;">
	<div style="width:100%; margin:auto; padding:10px; background:#FFFFFF;">
    	 <div style="clear:both"></div>
         
         	<div id="white_area" style="background-color:#FFFFFF; ">
			<div style="font-size:16px; color:#010E42; padding-top:10px;">
			
			<div>
			<div style="margin-bottom:15px;" id="username">
            
            
			<p>Hello Admin, below is the information from  '.$type.'</p>

			</div>
			</div>
			
			<div style="font-size:16px;"> <p></p>'.$message.'
			 

			</p>
			</div>
			<br>
		   </div>
       	   </div><!-- White area ends here -->
    <div style="color:#FFF; margin-top:20px; margin-bottom:20px;">
    	<div style="text-align:center; font-size:36px;"></div>
    </div>

    <div style="clear:both;"></div>
    
    <div style="clear:both;"></div>
    </div>
</div>
</body>
</html>';

   // More headers
//    $headers = "MIME-Version: 1.0" . "\r\n";
//    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//    // More headers
//    $headers .= "From: $fromName <".sender_email().">";
   //mail($to, $subject, $mailcontent, $headers);


   $mail=new PHPMailer();
    $mail->From = 'admin@ppnl.com.ng';
    $mail->FromName = $fromName;
    $mail->AddAddress($to);
   
  //  $mail->MsgHTML($body);
   $mail->CharSet = 'UTF-8';
   $mail->IsHTML(true);
   $mail->Body    = $mailcontent;
   $mail->Subject = $subject;
   $mail->IsHTML(true);
   $mail->Send();

    return $mailcontent;

}

?>