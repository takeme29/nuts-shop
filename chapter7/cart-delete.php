<?php session_start(); ?>
<?php require '../chapter6/header.php'; ?>
<?php require 'menu.php'; ?>
<?php
unset($_SESSION['product'][$_REQUEST['id']]);
echo 'カートから商品を削除しました。';
echo '<hr>';
require 'cart.php';
?>
<?php require '../chapter6/footer.php'; ?>
