<?php
require_once('./settings.php');

$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];

$url = DOMAIN. '/tests/receive_test?name='. $name;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET'); // メソッド指定
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 証明書の検証を行わない
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // レスポンスを文字列で受け取る
$response = curl_exec($curl);
curl_close($curl);

var_dump($response);

if(ENV == 'development') {
  print '開発環境のため、メール送信をスキップします。';
}

if(ENV == 'production'){
  //recaptcha
  if (isset($_POST["recaptchaResponse"]) && !empty($_POST["recaptchaResponse"]))
  {
      $secret = "6LfIhN4UAAAAABvuKR9x3AnVxB1nE1nzsP3-YJFQ";
      $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$_POST["recaptchaResponse"]);
      $reCAPTCHA = json_decode($verifyResponse);
      if ($reCAPTCHA->success)
      {
        echo "認証成功。";
      }
      else
      {
        exit('認証エラー');
      }
  }
  else
  {
      echo "エラーエラー";
  }
  //
  
  
  //メール送信
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");
  $subject = 'お問い合わせがありました';
  $message = '名前：'.$name."\r\n".'メールアドレス：'.$email."\r\n".'お問い合わせ内容：'.$content;
  
  
  if(mb_send_mail($email, $subject, $message)) {
    print 'メールを送信しました。';
  } else {
    print 'メール送信時にエラーが発生しました';
  }
}