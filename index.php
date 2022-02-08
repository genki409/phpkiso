<?php
    // formタグの使い方
    // ・action属性 = 搬送先（どこに行きたいか）
    // ・method（技・方法）属性 = データの送信方法→重要な２つ（GET送信・POST送信）

    // データの送信ができるタグ
    // aタグ *GET送信しかできない
    // <a href=""></a>
    // GET送信 = データ量が少ない、個人情報が含まれない,URLに？がつく
    // POST送信 = データ量が多い、個人情報が含まれる
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>お問い合わせ</title>
</head>
<body>
  <h1>お問い合わせ情報入力</h1>
  <form method="POST" action="check.php">
    <div>
        ニックネーム<br>
        <input type="text" name="nickname" style="width:100px">
    </div>
    <div>
        メールアドレス<br>
        <input type="text" name="email" style="width: 200px">
    </div>
    <div>
        お問い合わせ内容<br>
        <textarea name="content" cols="40" rows="5"></textarea>
    </div>
    <input type="submit" value="送信">
  </form>
</body>
</html>

