<?php
//hi there, variables have been moved over to loadvls.php!!!
//quick faq: why? because people told me that editing ServerHandling.php is annoying
echo "<title>". $ProjectName ."</title>
<link rel='stylesheet' href='". $baseUrl ."/general/css/app.php'>
<link rel='stylesheet' href='". $baseUrl ."/general/css/usetypekit.css'>
<link rel='stylesheet' href='". $baseUrl ."/general/css/fontawesome-pro-v5.10.1/css/all.css'>
<link rel='stylesheet' href='". $baseUrl ."/general/css/spacing.css'>
<script src='". $baseUrl ."/general/js/sitejs.js' type='text/javascript'></script>
<script src='". $baseUrl ."/general/js/sitejs2.js' type='text/javascript'></script>";
//embed!!!!
echo "
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<meta name='csrf-token' content='UoWWdpkURTTM6O5NFqC8YmUD3tQykALzti6x44z2'>
<meta name='og:title' content='". $ProjectName ."'>
<meta name='author' content='". $ProjectName ."'>
<meta name='description' content='". $ProjectName .", it is website. He is for old brick-builder. Good for use.'>
<meta name='og:description' content='". $ProjectName .", it is website. He is for old brick-builder. Good for use.'>
<meta name='og:site_name' content='". $ProjectName ."'>";
?>