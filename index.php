<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
<?php
$to = $_POST['email'];
$from = $_POST['from'];
$message = $_POST['message'];

$to = 'mm9307988@gmail.com';
$from = 'cjbox2782@gmail.com';
$message = 'Test Message';

if($to == '') {
    echo 'Error : Can\'t Send To Nobody !!';
}else if($from == ''){
    echo "Error $to Can\'t Recive Email From No One !!";
}
else if($message ==''){
    echo 'Fuck You Are Joking Mother Fucker, Where Is The Fucking Message';
}else{
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $headers = 'Content-type: text/html; charset=utf-8';
    $headers = "From:" . $from;
    if(mail($to, $from, $message, $headers))
    {
        echo 'true';
    }
    else
    {
        echo 'false';
    }
}?>
</body>
</html>
