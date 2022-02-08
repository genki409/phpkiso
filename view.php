<!DOCTYPE html>
<html lang="ja">
<head>
  <title>検索ページ</title>
  <meta charset="utf-8">
</head>
<body>
  <form action="" method="post">
    <p>検索したいidを入力してください。</p>
    <input type="text" name="code">
    <input type="submit" value="検索">
  </form>
</body>
</html>

<?php

echo '<br>';

// データベースに接続する
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

// SQL文を実行する
$sql = 'SELECT * FROM `surevy`';
$stmt = $dbh->prepare($sql);
$stmt->execute();

// while (1) {
//     $rec = $stmt->fetch(PDO::FETCH_ASSOC);
//     if ($rec == false) {
//       break;
//     }
//     echo $rec['code'] . '<br>';
//     echo $rec['nickname'] . '<br>';
//     echo $rec['email'] . '<br>';
//     echo $rec['content'] . '<br>';
//     echo '<hr>';
//   }

$rec = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($rec as $value) {
    echo $value['code'] . '<br>';
    echo $value['nickname'] . '<br>';
    echo $value['email'] . '<br>';
    echo $value['content'] . '<br>';
    echo '<hr>';
}

// データベースを切断する
$dbh = null;

?>

