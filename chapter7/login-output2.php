<?php session_start(); ?>
<?php require '../chapter6/header.php'; ?>
<?php require 'menu.php'; ?>
<?php
unset($_SESSION['customer']);
require_once '../chapter6/connect.php';
$sql=$pdo->prepare('select * from customer where login = ? and password = ?');
$sql->bindParam(1, $login, PDO::PARAM_STR);
$sql->bindParam(2, $password, PDO::PARAM_STR);
$sql->execute();
/*foreach ($sql as $row) {
	$_SESSION['customer']=[
		'id'=>$row['id'], 'name'=>$row['name'], 
		'address'=>$row['address'], 'login'=>$row['login'], 
		'password'=>$row['password'],'email'=>$row['email']];
}*/
if (isset($_SESSION['customer'])) {
	echo 'いらっしゃいませ、', $_SESSION['customer']['name'], 'さん。';
} else {
	echo 'ログイン名またはパスワードが違います。';
}
?>
<?php require '../chapter6/footer.php'; ?>
