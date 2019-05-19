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

$rand = mt_rand(1,3);

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
<h1><?= $result ?></h1>
</div>

<?php
if($result == '勝ち'){
  echo "<img src=\"img/party_animal.png\" class=result-img>";
 } else {
  echo "<img src=\"img/ganbare.jpg\" class=result-img>";
 }

   if ($_SESSION["computer"] == '花子ちゃん' && $result == '勝ち'){
    echo "<img src=\"img/angry_girl.png\" class=comr-img>";
  } else if ($_SESSION["computer"] == '花子ちゃん' && $result == '引き分け'){
    echo "<img src=\"img/angry_girl.png\" class=comr-img>";
  } else if ($_SESSION["computer"] == '花子ちゃん' && $result == '負け'){
    echo "<img src=\"img/lucky_girl.png\" class=comr-img>";
  } else if ($_SESSION["computer"] == '太郎くん' && $result == '勝ち' ){
    echo "<img src=\"img/angry_boy.png\" class=comr-img>";
  } else if ($_SESSION["computer"] == '太郎くん' && $result == '引き分け'){
    echo "<img src=\"img/angry_boy.png\" class=comr-img>";
  } else if ($_SESSION["computer"] == '太郎くん' && $result == '負け') {
    echo "<img src=\"img/lucky_boy.png\" class=comr-img>";
  }

  ?>

<form>
   <input type="button" class="button" value="再チャレンジ！" onClick="history.go(-2)">
   </form>

   </div>

</body>
</html>