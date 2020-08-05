<?php session_start(); ?>
<?php require '../chapter6/header.php'; ?>
<?php require 'menu.php'; ?>
<?php
if (isset($_SESSION['customer'])) {
	require_once '../chapter6/connect.php';
	$sql=$pdo->prepare(
		'delete from favorite where customer_id=? and product_id=?');
	$sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
	echo 'お気に入りから商品を削除しました。';
	echo '<hr>';
} else {
	echo 'お気に入りから商品を削除するには、ログインしてください。';
}
require 'favorite.php';
?>
<?php require '../chapter6/footer.php'; ?>
