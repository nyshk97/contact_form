<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="./css/style.css"> -->
  <title>サンプルフォーム</title>
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
  <h1>サンプルフォーム</h1>
  <p>入力したメールアドレスにメールを送信します。</p>
  <form action="confirm.php" method="post">
    <div class="form-group">
      <label for="company">会社名</label>
      <input type="text" name="company" id="company" class="form-control" autofocus required placeholder="サンプル株式会社">
    </div>
    <div class="form-group">
      <label for="name">お名前</label>
      <input type="text" name="name" id="name" class="form-control" required placeholder="山田太郎">
    </div>
    <div class="form-group">
      <label for="kana">フリガナ</label>
      <input type="text" name="kana" id="kana" class="form-control" required placeholder="ヤマダタロウ">
    </div>
    <div class="form-group">
      <label for="email">メールアドレス</label>
      <input type="text" name="email" id="email" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="test@example.com">
    </div>
    <div class="form-group">
      <label for="phone">電話番号</label>
      <input type="text" name="phone" id="phone" class="form-control" required pattern="^0\d{9,10}$" placeholder="09012345678">
    </div>
    <div class="form-group">
      <label for="content">お問い合わせ内容</label>
      <textarea name="content" id="content" class="form-control" required></textarea>
    </div>
    <div class="form-group">
      <p>お問い合わせ種別</p>
      <label for="graphics">グラフィック制作</label>
      <input type="radio" name="kind" id="graphics">
      <label for="web">web制作</label>
      <input type="radio" name="kind" id="web">
      <label for="movie">動画制作</label>
      <input type="radio" name="kind" id="movie">
      <label for="others">その他</label>
      <input type="radio" name="kind" id="others">
    </div>
    <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
    <input type="submit" value="確認画面へ" class="btn btn-primary btn-block">    
  </form>
</body>
</html>
<style>
  input[type="radio"] {
    margin-right: 16px;
  }
</style>