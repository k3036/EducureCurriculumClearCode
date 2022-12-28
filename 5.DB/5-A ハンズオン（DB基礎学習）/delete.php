<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>confirm.php</title>
  <link rel="stylesheet" href="form.css">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  </style>
</head>

<body>
  <?php
          $referer = $_SERVER["HTTP_REFERER"];
          $url = 'inquiryScreen.php';

            if(strstr($referer,$url)){

            }else{
              die("正規の画面からアクセスしてください");
              exit;
            }
        ?>

  <?php
          function XssOCuntermeasure($XssMeasures)
          {
              echo nl2br(htmlspecialchars($XssMeasures, ENT_QUOTES, "UTF-8")) ;
          }
        ?>

  <?php

                $dsn ='mysql:host=localhost;dbname=cafe;charset=utf8';
                $user = 'root';
                $pass= '333777';
                $dbh = new PDO($dsn, $user, $pass,[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                ]);
                $id = $_GET["id"] ;

  ?>
  <?php

        try {

                $sql = "DELETE FROM contacts WHERE id = :id";
                $stmt = $dbh->prepare($sql);
                $params = array(':id'=>$id);
                $stmt->bindValue(':id', $id);
                $stmt->execute($params);

        } catch (PDOException $e) {

                echo $e->getMessage();

        } finally {

                $pdo = null;

        }

        header("location: inquiryScreen.php");

  ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="form0main.js"></script>
</body>

</html>