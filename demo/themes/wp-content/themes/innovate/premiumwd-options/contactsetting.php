<?php


$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
//require_once( $parse_uri[0] . 'wp-load.php' );
//require_once( ABSPATH . 'wp-load.php' );


$reply_name="Auto Responde";

// Change the Email Addresses below to email Id where you want to get your emails.

// Reply Email Address where you want to set reply to email ID


$replyto = get_option('premiumwd_contact_mail');

$uploadpath='/uploads/';

$save_path ='http://'.$_SERVER['SERVER_NAME'].$uploadpath;  // do not change this
$subject = get_option('premiumwd_contact_subject');


$autorespond="no"; // no : Disable the Auto-Responder   yes : Enable Auto-Responder.

$usesmtp="no"; // no : Disable the Use Smtp   yes : Enable Use Smtp.



// smtp configration
$smtphost="ssl: //smtp.domain.com";  // SMTP Server Ex: smtp.yourdomain.com
$smtpport=465; // SMTP Port Ex: 45
$smtpusername='yourname@domain.com';  // SMTP username Ex: yourname@yourdomain
$smtppassword="yourpassword";  // SMTP password Ex: password
?>