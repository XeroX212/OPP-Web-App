<?php 
//buffer start
ob_start(); 

//access the existing session so we can kill it
session_start();

require_once('db.php');

$ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
$ipaddress = 'UNKNOWN';
$ipaddress = ip2long($ipaddress);
$time = date("Y/m/d H:i:s"); // date and time in a single variable
$sql = "INSERT INTO IP (id, ip, time) VALUES ('', '$ipaddress', '$time')";
$conn->exec($sql);
$conn = null;

//remove any session variables
session_unset();

//kill the session
session_destroy();

//redirect to login
header('location:login.php');

//buffer end
ob_flush();
?>


