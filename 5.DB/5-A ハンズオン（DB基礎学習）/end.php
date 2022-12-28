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
          $name = $_SESSION["editName"]  ;
          $kana = $_SESSION["editHowToRead"] ;
          $tel = $_SESSION["edithPoneNumber"] ;
          $email =$_SESSION["editEmailAddress"] ;
          $body = $_SESSION["editContentsOfInquiry"];
          $id = $_SESSION["id"] ;
          $stmt = $dbh->prepare('UPDATE contacts SET name = :updateName , kana = :updateKana , tel = :updateTel , email = :updateEmail , body = :updateBody WHERE id = :id');
          $stmt->bindValue(':updateName', $name , PDO::PARAM_STR);
          $stmt->bindValue(':updateKana', $kana , PDO::PARAM_STR);
          $stmt->bindValue(':updateTel', $tel , PDO::PARAM_STR);
          $stmt->bindValue(':updateEmail', $email , PDO::PARAM_STR);
          $stmt->bindValue(':updateBody', $body , PDO::PARAM_STR);
          $stmt->bindValue(':id',  $id );
          $stmt->execute();

  } catch (PDOException $e) {

    echo $e->getMessage();
    $dbh->rollBack();

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
  <?php
        $referer = $_SERVER["HTTP_REFERER"];
        $url = 'editConfirm.php';
          if(!strstr($referer,$url)){

            die("正規の画面からアクセスしてください");
            exit;

          }
    ?>
  <div class=contentOfTransmission3>
    <p class="inquirySendCompletely">お問い合わせ</p>
    <p class="inquirySendCompletelyLine"></p>
    <p class="thankYouText0">更新完了致しました。</p>
    <p class="thankYouText3">更新頂いた件につきましては、</p>
    <p class="thankYouText2">当社より折り返しご連絡を差し上げる場合がございます。</p>
    <a href="contact.php" class="backToTopButton">トップへ戻る</a>
  </div>
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