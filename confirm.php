<?php
$company = $_POST['company'];
$name = $_POST['name'];
$kana = $_POST['kana'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$content = $_POST['content'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="./css/style.css"> -->
  <title>送信確認</title>
  <!-- reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js?render=6LfIhN4UAAAAAJWVOiRgD1SRSN8TIDEX4dYiHG9T"></script>
  <script>
      grecaptcha.ready(function () {
        grecaptcha.execute("6LfIhN4UAAAAAJWVOiRgD1SRSN8TIDEX4dYiHG9T", {action: "sent"}).then(function(token) {
          var recaptchaResponse = document.getElementById("recaptchaResponse");
          recaptchaResponse.value = token;
        });
      });
  </script>
  <!--  -->
</head>
<body class="container">
  <h1>送信確認</h1>
  <p>ご入力いただいた内容は下記の通りです。<br>お間違いがなければ送信ボタンをクリックしてください。</p>
  <dl>
    <dt>会社名</dt>
    <dd><?= $company ?></dd>
    <dt>お名前</dt>
    <dd><?= $name ?></dd>
    <dt>フリガナ</dt>
    <dd><?= $kana ?></dd>
    <dt>メールアドレス</dt>
    <dd><?= $email ?></dd>
    <dt>電話番号</dt>
    <dd><?= $phone ?></dd>
    <dt>お問い合わせ内容</dt>
    <dd><?= $content ?></dd>
  </dl>
  <form action="post.php" method="post">
    <input type="hidden" name="company" value="<?= $company ?>">
    <input type="hidden" name="name" value="<?= $name ?>">
    <input type="hidden" name="kana" value="<?= $kana ?>">
    <input type="hidden" name="email" value="<?= $email ?>">
    <input type="hidden" name="phone" value="<?= $phone ?>">
    <input type="hidden" name="content" value="<?= $content ?>">
    <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
    <input type="submit" value="送信" class="btn btn-primary btn-block">
  </form>
</body>
</html>