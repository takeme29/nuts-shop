<?php require 'takemura_shop/chapter6/header.php'; ?>
<table>
<tr><th>商品番号</th><th>商品名</th><th>価格</th></tr>
<?php
require_once 'connect.php';
foreach ($pdo->query('select * from product') as $row) {
?>
		<tr>
			<td><?=htmlspecialchars($row['id'])?></td>
			<td><?=htmlspecialchars($row['name'])?></td>
			<td><?=$row['price']?></td>
		</tr>
<?php } ?>
</table>

<?php require 'chapter6/footer.php'; ?>
