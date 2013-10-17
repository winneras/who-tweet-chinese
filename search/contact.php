<?php

$dBuser = 'root';
$dBpass = 'root';
$dBhost = 'localhost';
$dBport = '8889';
$dBname = 'holding-contact';

$con = mysql_connect('localhost', 'root', 'root');
//mysql_connect($dBhost,$dBuser,$dBpass);
if (!$con) {
    die('Can not connect:' . mysql_errno());
}

@mysql_select_db('holding-contact', $con);
$name = mysql_real_escape_string($_REQUEST['name']);
$company = mysql_real_escape_string($_REQUEST['company']);
$email = mysql_real_escape_string($_REQUEST['email']);
$phone = mysql_real_escape_string($_REQUEST['phone']);
$from = mysql_real_escape_string($_REQUEST['from']);

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $queryString = "INSERT INTO `holding-contact`.`user` 
        (`ID`, `Name`, `Company`, `Email`, `Phone`, `from` , `Active`, `Timestamp`) 
        VALUES (NULL, '$name', '$company', '$email', '$phone', '$from' , '1', CURRENT_TIMESTAMP)";

    $dBquery = mysql_query($queryString);

    echo $dBquery;
}  else {
    echo '3';
}
?>