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
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Jumbotron-->
      <section class="card  wow fadeIn flex-row" id="intro">
       <div class="make_card_wrap">
         <img class="make_card" src="img/pro/sample.jpg" alt="">
       </div>
      </section>
      <!--Section: Jumbotron-->
      <hr class="my-5">
      <section class="card">
        <div class=" card-body ">
      <h2 class="text-center">①カードタイプを選択</h2>
      <p class="text-center">カードは4タイプ。クリックして選べます。クリックしない場合は一番左のカードタイプが選択されます。</p>
      <h2 class="text-center">②フォントを選択</h2>
      <p>手書き風のフォントが4種類。「マーカー風」「マジック風」「えんぴつ風」「クレヨン風」です。フォントによってカードの雰囲気がかなり変わるので重要です。</p>
      <p>ひらがな・カタカナ・アルファベットは全てのフォントで対応。漢字はフォントによって対応してない文字があります。「クレヨン風」に関してはそもそも漢字対応してません。</p>
      <h2 class="text-center">③文字を入力</h2>
      <p>「送り相手」「カードの名前」「一言メッセージ」を書きましょう。カードの名前は「肩たたき券」でも「ハッピーバースデー」でも「皿洗い代行券」でもなんでも良いです。「送る相手」「一言メッセージ」は未入力でもOKです。</p>
      <h2 class="text-center">④発行日と有効期限を設定</h2>
      <p class="text-center">発行日と有効期限の設定ができます。適当に設定しましょう</p>
      <h2 class="text-center">⑤カードを確認して保存</h2>
      <p>①〜④まで終わったら「カードを発行する」ボタンを押してください。入力内容を反映したオリジナルのギフトカードが生成されます。保存するなりして送ってみてください。</p>

        <div class="text-white text-center">
          <button type=“button” onclick="location.href='index.php#form'" class=" aqua-gradient wow btn btn-outline-white btn-lg ">カード作成フォームに移動する</button>

        </div>
        </div>
      </section>
    </div>
  </main>

  <!--Footer-->
<?php include("php/footer.php"); ?>

</body>
</html>
