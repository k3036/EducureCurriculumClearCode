<?php

session_start();

?>
<?php
$dsn ='mysql:host=localhost;dbname=cafe;charset=utf8';
$user = 'root';
$pass= '333777';

try {

    $dbh = new PDO($dsn, $user, $pass,[
      PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    ]);

    $name = $_SESSION["chineseCharacterName"] ;
    $kana = $_SESSION["howToRead"] ;
    $email = $_SESSION["emailAddress"] ;
    $body = $_SESSION["contentsOfInquiry"];

    if(isset($_SESSION["phoneNumber"])){

      $tel = $_SESSION["phoneNumber"] ;

    }

    if (isset($tel)) {

        $stmt = $dbh->prepare('INSERT INTO contacts (name, kana, tel, email, body) VALUES(:name, :kana, :tel, :email, :body)');

    }else{

      $stmt = $dbh->prepare('INSERT INTO contacts (name, kana, email, body) VALUES(:name, :kana, :email, :body)');

    }

    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':kana', $kana);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':body', $body);

    if(isset($tel)){
      $stmt->bindValue(':tel', $tel);
    }

    $stmt->execute();

} catch (PDOException $e) {

    echo $e->getMessage();

} finally {

    $pdo = null;

}

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>thankYouForYourInquiry</title>
  <link rel="stylesheet" href="form.css">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
    text-align: center;
  }
  </style>
</head>

<body>
  <?php include "inquiryHeader3.php";?>
  <form method=“POST”>
    <?php

        $referer = $_SERVER["HTTP_REFERER"];
        $url = 'confirm.php';
          if(!strstr($referer,$url)){
            die("正規の画面からアクセスしてください");
            exit;
          }

      ?>
    <div class=contentOfTransmission3>
      <p class="inquirySendCompletely">お問い合わせ</p>
      <p class="inquirySendCompletelyLine"></p>
      <p class="thankYouText0">お問い合わせ頂きありがとうございます。</p>
      <p class="thankYouText1">送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
      <p class="thankYouText2">なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください</p>
      <a href="contact.php" class="backToTopButton">トップへ戻る</a>
    </div>
  </form>
  </main>
  <div class="FooterList">
    <?php include "footerThird.php";?>
  </div>
</body>

</html>
<?php

      $_SESSION = array();
      session_destroy();

?>