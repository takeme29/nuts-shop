<?php require '../chapter6/header.php'; ?>
<?php require 'menu.php'; ?>
<form action="product.php" method="post">
商品検索
<input type="text" name="keyword">
<input type="submit" value="検索">
</form>
<hr>
<?php
echo '<table>';
echo '<th>商品番号</th><th>商品名</th><th>価格</th>';
require_once '../chapter6/connect.php';
if (isset($_REQUEST['keyword'])) {
	$sql=$pdo->prepare('select * from product where name like ?');
	$sql->execute(['%'.$_REQUEST['keyword'].'%']);
} else {
	$sql=$pdo->prepare('select * from product');
	$sql->execute([]);
}
foreach ($sql as $row) {
	$id=$row['id'];
	echo '<tr>';
	echo '<td>', $id, '</td>';
	echo '<td>';
	echo '<a href="detail.php?id=', $id, '">', $row['name'], '</a>';
	echo '</td>';
	echo '<td>', $row['price'], '</td>';
	echo '<img src=’image/<?=$id?>.jpg’>';
	echo '</tr>';
}
echo '</table>';
?>
<?php require '../chapter6/footer.php'; ?>
