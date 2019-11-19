<?php

$issue_date=$_POST['issue_date'];
$expiration_date=$_POST['expiration_date'];
/*postされたらイカ実行*/
$errors = array();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  /*カードタイプを選択*/
  if (!isset($_POST['card_temp'])){
    $card_temp='img/card_temp/temp-image1.jpeg';
  }else{
    switch($_POST['card_temp']){
      case 1:$card_temp='img/card_temp/temp-image1.jpeg';
      break;
      case 2:$card_temp='img/card_temp/temp-image2.jpeg';
      break;
      case 3:$card_temp='img/card_temp/temp-image3.jpeg';
      break;
      case 4:$card_temp='img/card_temp/temp-image4.jpeg';
      break;
    }
  }
  /*フォントを選択*/
  switch($_POST['font']){
    case 1:$font='font/marker.ttf';
            $issue="発行日：";
            $expiration="有効期限：";
    break;
    case 2:$font='font/tegaki.ttf';
            $issue="発行日：";
            $expiration="有効期限：";
    break;
    case 3:$font='font/enpitu.ttf';
            $issue="発行日：";
            $expiration="有効期限：";
    break;
    case 4:$font='font/Crayon.ttf';
            $issue="はっこうび：";
            $expiration="ゆうこうきげん：";
    break;
  }

  /*$toをチェック*/
  if (!isset($_POST['to'])){
    $to=null;
    $to_x=0;
    $to_font_size=0;
  }elseif(mb_strwidth($_POST['to']) > 24){
    $errors['to']="送る相手は全角12文字・半角24文字までです";
    $to=null;
    $to_x=0;
    $to_font_size=0;
  }else{
    $to=$_POST['to'];
    /*$toの文字数、フォントの大きさ*/
    $to_strlen=mb_strwidth($to);
    switch($to_strlen){
      case 0:$to_x=0;
             $to_font_size=0;
             break;
      case 1:
      case 2:$to_x=385;
             $to_font_size=40;
             break;
      case 3:
      case 4:$to_x=365;
             $to_font_size=40;
             break;
      case 5:
      case 6:$to_x=335;
             $to_font_size=40;
             break;
      case 7:
      case 8:$to_x=305;
             $to_font_size=40;
             break;
      case 9:
      case 10:$to_x=275;
             $to_font_size=40;
             break;
      case 11:
      case 12:$to_x=235;
             $to_font_size=40;
             break;
      case 13:
      case 14:$to_x=245;
             $to_font_size=40;
             break;
      case 15:
      case 16:$to_x=210;
             $to_font_size=40;
             break;
      case 17:
      case 18:$to_x=235;
             $to_font_size=35;
             break;
      case 19:
      case 20:$to_x=235;
              $to_font_size=35;
              break;
      case 21:
      case 22:$to_x=155;
              $to_font_size=35;
              break;
      case 23:
      case 24:$to_x=235;
              $to_font_size=35;
              break;
    }
  }
  /*$card_nameをチェック*/
  if (!isset($_POST['card_name'])){
    $card_name=null;
    $card_name_x=0;
    $card_name_font_size=0;
  }elseif(mb_strwidth($_POST['card_name']) > 24){
    $errors['card_name']="券の名前は全角12文字・半角24文字までです";
    $card_name=null;
    $card_name_x=0;
    $card_name_font_size=0;
  }else{
    $card_name=$_POST['card_name'];
    /*$card_nameの文字数、フォントの大きさ*/
    $card_name_strlen = mb_strwidth($card_name);
    switch($card_name_strlen){
      case 1:
      case 2:$card_name_x=350;
             $card_name_font_size=80;
             break;
      case 3:
      case 4:$card_name_x=305;
              $card_name_font_size=80;
              break;
      case 5:
      case 6:$card_name_x=315;
              $card_name_font_size=70;
              break;
      case 7:
      case 8:$card_name_x=230;
              $card_name_font_size=70;
              break;
      case 9:
      case 10:$card_name_x=175;
              $card_name_font_size=70;
              break;
      case 11:
      case 12:$card_name_x=175;
              $card_name_font_size=60;
              break;
      case 13:
      case 14:$card_name_x=140;
              $card_name_font_size=60;
              break;
      case 15:
      case 16:$card_name_x=120;
              $card_name_font_size=55;
              break;
      case 17:
      case 18:$card_name_x=135;
              $card_name_font_size=45;
              break;
      case 19:
      case 20:$card_name_x=110;
              $card_name_font_size=45;
              break;
      case 21:
      case 22:$card_name_x=110;
              $card_name_font_size=40;
              break;
      case 23:
      case 24:$card_name_x=90;
              $card_name_font_size=40;
              break;
    }
  }
  /*$card_nameをチェック*/
  if (!isset($_POST['message'])){
    $message=null;
    $message_x=0;
    $message_font_size=0;
  }elseif(mb_strwidth($_POST['message']) > 24){
    $errors['message']="メッセージは全角15文字・半角30文字までです";
    $message=null;
    $message_x=0;
    $message_font_size=0;
  }else{
    $message=$_POST['message'];
    /*$messageの文字数、フォントの大きさ*/
    $message_strlen = mb_strwidth($message);
    switch($message_strlen){
      case 0:$message_x=0;
             $message_font_size=0;
             break;
      case 1:
      case 2:$message_x=385;
             $message_font_size=40;
             break;
      case 3:
      case 4:$message_x=365;
              $message_font_size=30;
              break;
      case 5:
      case 6:$message_x=350;
              $message_font_size=30;
              break;
      case 7:
      case 8:$message_x=335;
              $message_font_size=30;
              break;
      case 9:
      case 10:$message_x=320;
              $message_font_size=30;
              break;
      case 11:
      case 12:$message_x=300;
              $message_font_size=30;
              break;
      case 13:
      case 14:$message_x=275;
              $message_font_size=30;
              break;
      case 15:
      case 16:$message_x=250;
              $message_font_size=30;
              break;
      case 17:
      case 18:$message_x=225;
              $message_font_size=30;
              break;
      case 19:
      case 20:$message_x=230;
              $message_font_size=30;
              break;
      case 21:
      case 22:$message_x=183;
              $message_font_size=30;
              break;
      case 23:
      case 24:$message_x=165;
              $message_font_size=30;
              break;
      case 25:
      case 26:$message_x=173;
              $message_font_size=27;
              break;
      case 27:
      case 28:$message_x=165;
              $message_font_size=26;
              break;
      case 29:
      case 30:$message_x=162;
              $message_font_size=25;
              break;
    }
  }
  
  $filerand=mt_rand(1, 100000);

  $newfile = "$filerand.jpg";

  // コピー先画像
  $image = imagecreatefromjpeg($card_temp);
  // 挿入する文字列の色(白)
  $color = imagecolorallocate($image, 0, 0, 0);
  // 挿入する文字列の角度
  $angle = 0;
  /*贈りあいて*/
  imagettftext(
  	$image,     // 挿入先の画像
  	$to_font_size,  // フォントサイズ
  	$angle,     // 文字の角度
  	$to_x,         // 挿入位置 x 座標
  	115,         // 挿入位置 y 座標
  	$color,     // 文字の色
  	$font,  // フォントファイル
  	$to
  );     // 挿入文字列
  /*券の名前*/
    imagettftext(
    	$image,     // 挿入先の画像
    	$card_name_font_size,      // フォントサイズ
    	$angle,     // 文字の角度
    	$card_name_x,         // 挿入位置 x 座標
    	225,         // 挿入位置 y 座標
    	$color,     // 文字の色
    	$font,  // フォントファイル
    	$card_name
    );     // 挿入文字列
    /*メッセージ*/
      imagettftext(
      	$image,     // 挿入先の画像
      	$message_font_size,      // フォントサイズ
      	$angle,     // 文字の角度
      	$message_x,         // 挿入位置 x 座標
      	315,         // 挿入位置 y 座標
      	$color,     // 文字の色
      	$font,  // フォントファイル
      	$message
      );     // 挿入文字列

  /*発行ひ*/
      imagettftext(
      	$image,     // 挿入先の画像
      	20,      // フォントサイズ
      	$angle,     // 文字の角度
      	40,         // 挿入位置 x 座標
      	390,         // 挿入位置 y 座標
      	$color,     // 文字の色
      	$font,  // フォントファイル
        $issue.$issue_date
      );     // 挿入文字列

  /*有効期限*/
      imagettftext(
      	$image,     // 挿入先の画像
      	20,      // フォントサイズ
      	$angle,     // 文字の角度
      	450,         // 挿入位置 x 座標
      	390,         // 挿入位置 y 座標
      	$color,     // 文字の色
      	$font,  // フォントファイル
      	$expiration.$expiration_date
      );     // 挿入文字列
  // ファイル名を指定して画像出力
  imagejpeg($image, $newfile);
}
 ?>
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
   <?php if(count($errors)): ?>
   <ul class="error_list">
   <?php foreach($errors as $error): ?>
   <li>
     <?php echo htmlspecialchars($error,ENT_QUOTES,"UTF-8"); ?>
   </li>
   <?php endforeach; ?>
   </ul>
 <?php else: ?>
   <!--Main layout-->
   <!--ヘッダー-->
   <?php include("php/nologin_header.php"); ?>
   <main class="mt-5 pt-5">
     <div class="container">

       <!--Section: Jumbotron-->
       <section class="card  wow fadeIn flex-row" id="intro">
        <div class="make_card_wrap">
          <img class="make_card" src="<?php echo $newfile ?>" alt="">
        </div>
       </section>
       <!--Section: Jumbotron-->
       <hr class="my-5">

     </div>
   </main>

   <!--Footer-->
 <?php include("php/footer.php"); ?>
<?php endif; ?>

 </body>
 </html>
