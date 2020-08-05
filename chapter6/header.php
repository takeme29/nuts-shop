<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Sample Programs</title>
<link rel="stylesheet" href="style.css">

</head> <!--ここまでがページの仕様 映らない-->

<body>  <!--ここから下が映る-->

<div class="<?php echo 'main' ?>"></div>

<?php
// トークン作成のための関数
function token($length = 20){  	
  return substr(str_shuffle('1234567890QWERTYUIOPLKJHGFDSAZXCVBNMabcdefghijklmnopqrstuvwxyz'), 0, $length);
}


