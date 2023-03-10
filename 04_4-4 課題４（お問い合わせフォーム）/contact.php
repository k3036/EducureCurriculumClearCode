<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>form</title>
  <link rel="stylesheet" href="form0css.php">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  </style>
</head>

<body>
  <p class="header0"><a href="">新型コロナウイルスに対する取り組みの最新情報をご案内</a></p>
  <div style="text-align: center" class="waitingRoom">
    <img src="cafe\img\eyecatch.jpg" alt="" width="100%" height="700" class="wr">
  </div>
  <div class=Logo0>
    <p class="logo0">
      <a href="#"><img src="cafe\img\logo.png" alt="" width="220px" height="35px"></a>
    </p>
  </div>
  <div class="topMenu0">
    <p class="example">
      <!-- クリックしたらモーダルを表示するボタン -->
      <a href="" style=text-decoration:none; class="space">サインイン</a>
      <!-- オーバーレイ -->
    <div class="overlay"></div>
    <!-- モーダルウィンドウ -->
    <div class="modal">
      <p class="Login2">ログイン</p>
      <div class="modalLine3"> </div>
      <div class="mailAddress2"> <input class="sizeTextBox2" type=" text" placeholder="メールアドレス"></div>
      <div class="passWord2"> <input class="sizePassWord2" type=" text" placeholder="パスワード"></div>
      <a href="" input type=" submit" class="submitButton2" style=text-decoration:none;>
        <p class="sendSize2"> 送&nbsp;&nbsp;信</p>
      </a>
      <div class="modalLine4"> </div>
      <a href="" input type=" submit" class="twitterButton2" style=text-decoration:none;>
        <p class="markSize2"><img src="cafe\img\twitter.png" height="35px" width=35px top="35px"></p>
      </a>
      <a href="" input type=" submit" class="fbButton2" style=text-decoration:none;>
        <p class="markSize2"><img src="cafe\img\fb.png" height="30px" width=30px></p>
      </a>
      <a href="" input type=" submit" class="googleButton2" style=text-decoration:none;>
        <p class="markSize2"><img src="cafe\img\google.png" height="30px" width=30px></p>
      </a>
      <a href="" input type=" submit" class="appleButton2" style=text-decoration:none;>
        <p class="markSize2"><img src="cafe\img\apple.png" height="30px" width=30px></p>
      </a>
    </div>
  </div>
  </p>
  </div>
  <div class="topMenu1">
    <p class="example">
      <a href=" #AtTheBeginning " style=text-decoration:none;>始めに</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href=" #Next " style=text-decoration:none;>体験</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="inquiryScreen.php" style=text-decoration:none;>お問い合わせ</a>
    </p>
  </div>
  <header class="header">

    <div class=" class = headMenu0"><a href="#">
        <img src="cafe\img\logo.png" alt="" width="220px" height="35px"></a>
    </div>

    <?php include "header.php";?>

  </header>

  <main>

    <P class="createYourFavoriteSpace">
      <?php
          echo "あなたの" ."</br>";
          echo "好きな空間を作る。" ."</br>";
      ?>
    </p>

    <div class="font0" id="AtTheBeginning">
      <img src="cafe\img\cafe1.jpg" alt="" width="66px" height="66px" class="fot0">
      <div class="title0">東京<br>車で15分</div>
      <br><br>
      <img src="cafe\img\cafe5.jpg" alt="" width="66px" height="66px" class="fot0">
      <div class="title1">岡山<br>車で1.5時間</div>
    </div>

    <div class="font1">
      <img src="cafe\img\cafe2.jpg" alt="" width="66px" height="66px" class="fot0">
      <div class="title2">神奈川<br>車で30分</div>
      <br><br>
      <img src="cafe\img\cafe6.jpg" alt="" width="66px" height="66px" class="fot0">
      <div class="title3">鹿児島<br>車で50分</div>
    </div>

    <div class="font2">
      <img src="cafe\img\cafe3.jpg" alt="" width="66px" height="66px" class="fot0">
      <div class="title2">愛知<br>車で1時間</div>
      <br><br>
      <img src="cafe\img\cafe7.jpg" alt="" width="66px" height="66px" class="fot0">
      <div class="title3">沖縄<br>車で2時間</div>
    </div>

    <div class="font3">
      <img src="cafe\img\cafe4.jpg" alt="" width="66px" height="66px" class="fot0">
      <div class="title2">京都<br>車で40分</div>
    </div>

    <div class="allFont4">
      <p class=favoriteLocation>好きなロケーションを選ぼう</p>
      <div class="sizeFixed">
        <!-- サイズ固定したい画像 -->
        <p class=fontClassic>
          <img src="cafe\img\intro1.jpg" alt="" width="520px" height="320px" class="fot1-0"></img>
        <p class=fontClassicName>クラシック</p>
        </p>
        <!-- サイズ固定したい画像 -->
        <p class=fontBar>
          <img src="cafe\img\intro2.jpg" alt="" width="520px" height="320px" class="fot1-0"></img>
        <p class=fontBarName>バー</p>
        </p>
        <!-- サイズ固定したい画像 -->
        <p class=fontCamp>
          <img src="cafe\img\intro3.jpg" alt="" width="520px" height="320px" class="fot1-0"></img>
        <p class=fontCampName>キャンプ</p>
        </p>
        <p class=fontResort>
          <img src="cafe\img\intro4.jpg" alt="" width="520px" height="320px" class="fot1-0"></img>
        </p>
      </div>
      <p class="ResortName">リゾート</p>
    </div>

    <p class=goToEats>
      <img src="cafe\img\goto.jpg" alt="" width="93%" height="320px" class="fot1-0"></img>
    </p>
    <h1 class="clearBox">
      <br><br><br>
      <p class="useTheCampaign">
        &nbsp; キャンペーンを利用して、全国で食事しよう。<br>
        &nbsp;&nbsp;いつもと違う景色に囲まれてカラダもココロもリフレッシュ。
      </p>
    </h1>
    <p class="go">Go To Eats</p>

    <div class="ExperienceMakingACafe" id="Next"></div>
    <div class="MakingACafe">
      <p class=Experience>カフェ作りを体験しよう</p>
      <p class=Expert>お店のエキスパートが案内するユニークな体験（直接対面型またはオンライン）。</p>
    </div>

    <div class="cooking3">

      <p class=Cooking0>
        <img src="cafe\img\exp1.jpg" alt="" class="Size3"></img>
      </p>

      <p class=Cooking1>
        <img src="cafe\img\exp2.jpg" alt="" class="Size3"></img>
      </p>

      <p class=Cooking2>
        <img src="cafe\img\exp3.jpg" alt="" class="Size3"></img>
      </p>

    </div>

    <div class="CookWord3">

      <p class=CookWord0>
        ジョブ体験<br>
      </p>

      <p class=CookWord1>
        レシピ体験<br>
      </p>

      <p class=CookWord2>
        プロモーション体験<br>
      </p>

    </div>

    <div class="CookWord32">


      <p class=CookWord00>

        カフェカウンターを体験しよう。<br>
      </p>

      <p class=CookWord11>
        美味しいレシピを考えてみよう。
      </p>

      <p class=CookWord22>
        お店の宣伝を手伝ってみよう。<br>
      </p>

    </div>

    <p class=HostsNationwide>
      全国のホストに仲間入りしよう
    </p>

    <div class="Business3">

      <p class=Business>
        <img src="cafe\img\host1.jpg" alt="" class="Size33"></img>
      </p>

      <p class=CommunityImage>
        <img src="cafe\img\host2.jpg" alt="" class="Size33"></img>
      </p>

      <p class=EatingAround>
        <img src="cafe\img\host3.jpg" alt="" class="Size33"></img>
      </p>

    </div>
    <div class="ThreeBusinessmen">

      <p class=BusinessWord00>
        ビジネス
      </p>

      <p class=CommunityWord11>
        コミュニティ
      </p>

      <p class=EatingAroundWord22>
        食べ歩き
      </p>

    </div>

    <div class="FooterList"></div>
  </main>
  <div class="FooterLine"></div>
  <?php include "footer.php";?>
  <div id="page_top"><a href="" style=text-decoration:none;>
      <p class=JumpTop>Jump To Top</p>
    </a></div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="form0main.js"></script>
</body>

</html>