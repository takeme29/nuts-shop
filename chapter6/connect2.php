<?php
$pdo=new PDO('mysql:host=localhost;dbname=takemura_shop;charset=utf8', 'takemura-megumi', 'Wert3333-');
//テーブルに接続したPDOクラスのコピーが$pdoこの変数にはPDOの機能が一式含まれている の意味

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//PDOのエラーモードを追加してください の意味

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
                   PDO::FETCH_ASSOC);
//フィールド名配列のみ取得する｡ちなみに数字配列のみならFETCH_NUM
?>

