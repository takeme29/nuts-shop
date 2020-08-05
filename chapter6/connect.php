<?php
$pdo= new PDO(
    /*$host='mysql1.php.xdomain.ne.jp',
    $dbname="takemura29_tkm",
    $user='takemura29_use@sv5.php.xdomain.ne.jp',
    $psw='Takeme29',
    $mydb='mysql:dbname='.$dbname.';host='.$host.';charset=utf8'*/
    'mysql:host=mysql1.php.xdomain.ne.jp;dbname=takemura29_tkm;charset=utf8', 'takemura29_use', 'Takeme29');
//テーブルに接続したPDOクラスのコピーが$pdoこの変数にはPDOの機能が一式含まれている の意味

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//PDOのエラーモードを追加してください の意味

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
                   PDO::FETCH_ASSOC);
//フィールド名配列のみ取得する｡ちなみに数字配列のみならFETCH_NUM
?>

