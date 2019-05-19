<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>じゃんけんをしよう</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
<div class="wrap">

<?php
session_start();
$player = $_POST["player"];

if($_SESSION["computer"] == 'ねこ'){
  $rand = 3;
} else if($_SESSION["computer"] == 'カニ'){
  $rand = mt_rand(1,2);
} else if($_SESSION["computer"] == '花子ちゃん'){
  $rand = mt_rand(1,3);
}

// $rand = mt_rand(1,3);

if($rand == 1){
    $pc = "グー";
} else if($rand == 2){
    $pc = "チョキ";
} else {
    $pc = "パー";
}

if ($pc == 'グー' && $player == 'パー'){
      $result = '勝ち';
   } else if ($pc == 'グー' && $player == 'チョキ'){
      $result = '負け';
    } else if ($pc == 'チョキ' && $player == 'グー'){
      $result = '勝ち';
   } else if ($pc == 'チョキ' && $player == 'パー') {
      $result = '負け';
   } else if ($pc == 'パー' && $player == 'チョキ') {
      $result = '勝ち';
   } else if ($pc == 'パー' && $player == 'グー') {
      $result = '負け';
   } else {
    $result = '引き分け';
   }
 ?>
  
  <div class="result">
  <p>あなたは<?= $player ?>、<?= $_SESSION["computer"] ?>は<?= $pc ?></p>
  </div>
  
<?php

if($player == 'グー'){
  echo "<img src=\"img/janken_gu.png\" class=result-img>";
 } else if($player == 'チョキ'){
  echo "<img src=\"img/janken_choki.png\" class=result-img>";
 }else if($player == 'パー'){
  echo "<img src=\"img/janken_pa.png\" class=result-img>";
 }

 if ($_SESSION["computer"] == 'ねこ'){
   echo "<img src=\"img/cat_hand.png\" class=comr-img>";
  }else if($_SESSION["computer"] == 'カニ' && $pc == 'グー'){
   echo "<img src=\"img/crab_g.png\" class=comr-img>";
  }else if ($_SESSION["computer"] == 'カニ' && $pc == 'チョキ'){
   echo "<img src=\"img/crab_c.png\" class=comr-img>";
  }else if ($_SESSION["computer"] == '花子ちゃん' && $pc == 'グー' ){
    echo "<img src=\"img/janken_gu.png\" class=comr-img>";
  }else if ($_SESSION["computer"] == '花子ちゃん' && $pc == 'チョキ'){
    echo "<img src=\"img/janken_choki.png\" class=comr-img>";
  }else if ($_SESSION["computer"] == '花子ちゃん' && $pc == 'パー') {
    echo "<img src=\"img/janken_pa.png\" class=comr-img>";
  }

  ?>

  <div class="result">
  <h1><?= $result ?></h1>
  </div>

<form>
   <input type="button" class="button" value="再チャレンジ！" onClick="history.go(-2)">
   </form>

   </div>

</body>
</html>