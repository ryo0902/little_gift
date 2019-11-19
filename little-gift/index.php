<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Little Gift</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link href="css/home.css" rel="stylesheet">
</head>

<body>
<!--ヘッダー-->
<?php include("php/nologin_header.php"); ?>
  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">
      <section class="card aqua-gradient wow fadeIn flex-row" id="intro">
        <div class="card-body text-white text-center py-5 px-5 my-5">
          <h1 class="mb-4">
            <strong>小さなありがとうをカタチに</strong>
          </h1>
          <p>
            <strong>Little Giftは無料でオリジナルのギフトカードを作れるサービスです。</strong>
          </p>
          <p class="mb-4">
            <strong>肩たたき券やマッサージ券など自分で作ったギフトカードで<br>大切な人をちょっとだけハッピーにしましょう。</strong>
          </p>
          <button type=“button” onclick="location.href='#form'" class="btn btn-outline-white btn-lg">作ってみる</button>
        </div>
      </section>


      <hr class="my-5">


      <section class="text-center">
        <div class="row mb-4 wow fadeIn">
          <div class="col-md-6 mb-4">
            <div class="card">
              <div class="view overlay">
                <img src="img/pro/sample (2).jpg" class="card-img-top"
                  alt="">
                <a href="nologin_make_card_form">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">作り方</h4>
                <p class="card-text">登録なし＆無料でオリジナルギフト券が作れます。作成後は保存して誰かに送ってみよう</p>
                <a href="howto.php"
                  class="btn btn-primary btn-md">作り方を見る
                  <i class="fas fa-play ml-2"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card">
              <div class="view overlay">
                <img src="img/pro/sample (1).jpg" class="card-img-top"
                  alt="">
                <a href="nologin_make_card_form.php">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">作品サンプル</h4>
                <p class="card-text">ユーザーが作ったギフトカードをまとめています。作成のヒントになるかもしれません。</p>
                <a href="" target="_blank"
                  class="btn btn-primary btn-md">みんなの作品を見る
                  <i class="fas fa-play ml-2"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

<hr class="my-5">
        <h2 id=form>ギフトカード作成フォーム</h2>
        <form action="nologin_card_check.php" method="post" enctype="multipart/form-data">
          <div class = " form-group ">
            <label for="select1a">カードタイプ：</label><br>
            <label><input type="radio" name="card_temp" value="1" class="radio"><img src="img/card_temp/temp-image1.jpeg" class="radio_image" required></label>
            <label><input type="radio" name="card_temp" value="2" class="radio"><img src="img/card_temp/temp-image2.jpeg" class="radio_image" checked></label>
            <label><input type="radio" name="card_temp" value="3" class="radio"><img src="img/card_temp/temp-image3.jpeg" class="radio_image"></label>
            <label><input type="radio" name="card_temp" value="4" class="radio"><img src="img/card_temp/temp-image4.jpeg" class="radio_image"></label>
          </div>
          <div class = " form-group ">
            <label for="select1a">フォント：</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="font" id="radio2a" value="1" checked>
              <label class="form-check-label" for="radio2a">マーカー風</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="font" id="radio2b" value="2">
              <label class="form-check-label" for="radio2b">マジック風</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="font" id="radio2c" value="3">
              <label class="form-check-label" for="radio2b">えんぴつ風</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="font" id="radio2d" value="4">
              <label class="form-check-label" for="radio2b">クレヨン風</label>
            </div>
          </div>
          <div class = " form-group ">
            <label for = "text1">送る相手（全角12文字・半角24文字まで）：</label>
            <input type = "text" name="to" id = "text1" class = " form-control " placeholder="おかあさんへ" >
          </div>
          <div class = " form-group ">
              <label for = "text1">券の名前（全角12文字・半角24文字まで）：</label>
              <input type = "text" name="card_name" id = "text1" class = " form-control " placeholder="肩たたき券" required>
          </div>
          <div class = " form-group ">
            <label for = "textarea1">一言メッセージ（全角15文字・半角30文字まで）：</label>
            <input type = "text" name="message" rows="2"　id = "text1" class = " form-control " placeholder="いつもありがとう。">
          </div>
          <div class = " form-group ">
            <label for = "textarea1">発行日：</label>
            <input type="date" name="issue_date" class = "form-control " value=" <?php echo date("Y/m/d")?>">
          </div>
          <div class = " form-group ">
            <label for = "textarea1">有効期限：</label>
            <input type="date" name="expiration_date" class = "form-control" value=" <?php echo date("Y/m/d")?>">
          </div>

          <button class="btn btn-primary btn-sm" type="submit">カードを発行する</button>
        </form>
      </section>
      <!--Section: Cards-->

    </div>
  </main>
  <!--Footer-->
<?php include("php/footer.php"); ?>
</body>
</html>
