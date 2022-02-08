<?php
    // $nickname = htmlspecialchars( $_POST['nickname']);
    // $email =htmlspecialchars( $_POST['email']);
    // $content =htmlspecialchars( $_POST['content']);

    // // DBとの連携
    // // 1. データベースに接続する
    // $dsn = 'mysql:dbname= phpkiso;host=localhost';

    // // mysqlのサーバーにログインするという記述
    // $user = 'root';
    // $password = '';

    // // PDO = PHPでデータベースを作成（接続）する際に必要な技（インスタンス）
    // $dbn = new PDO($dsn, $user, $password);
    // $dbn->query('SET NAMES utf8');
    // // 2. SQL文を実行する
    // // SQL文を用意する
    // $sql = 'INSERT INTO `surevy`(`nickname`, `email`, `content`) VALUES ("' . $nickname . '", "'.$email.'", "'.$content.'")';

    // // phpからsql文を発行する時に使用する関数　→ prepace = 準備、execute = 実行
    // $stmt = $dbn->prepare($sql);
    // $stmt->execute();

    // // 3. データベースを切断する

    // $dbh = null;


?>

<?php
  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $content = htmlspecialchars($_POST['content']);

  // １．データベースに接続する
  $dsn = 'mysql:dbname=phpkiso;host=localhost';
  $user = 'root';
  $password='';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

  // ２．SQL文を実行する
  $sql = 'SELECT * FROM `surevy`';
  $stmt = $dbh->prepare($sql);
  $stmt->execute();

  // ３．データベースを切断する
  $dbh = null;
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <title>送信完了</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>お問い合わせありがとうございました！</h1>
  <p>ニックネーム：<?php echo $nickname ?></p>
  <p>メールアドレス：<?php echo $email ?></p>
  <p>お問い合わせ内容：<?php echo $content ?></p>
  <a href="view.php">問い合わせ内容一覧</a>
</body>
</html>