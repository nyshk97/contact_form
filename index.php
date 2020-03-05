<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
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
  <form action="post.php" method="post">
    <div class="form-group">
      <label for="name">お名前</label>
      <input type="text" name="name" id="name" class="form-control" autofocus required>
    </div>
    <div class="form-group">
      <label for="email">メールアドレス</label>
      <input type="text" name="email" id="email" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
    </div>
    <div class="form-group">
      <label for="content">お問い合わせ内容</label>
      <textarea name="content" id="content" class="form-control" required></textarea>
    </div>
    <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
    <input type="submit" value="送信" class="btn btn-primary btn-block">    
  </form>
</body>
</html>