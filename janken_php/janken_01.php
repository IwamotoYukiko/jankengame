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

 <div class="wrap01">
 
 <p class="comImg">
<?php
session_start();
$_SESSION["computer"] = $_POST["computer"];

    if($_SESSION["computer"] == '花子ちゃん') {
        echo "<img src=\"img/woman.png\" class=com-img>";
    } else {
        echo "<img src=\"img/man.png\" class=com-img>";
    }
?>
</p>

<p><?= $_SESSION["computer"]?>と<br>じゃんけん</p>
</div>

<div class="form-out">
<form method="post" action="janken_02.php">
    <input type="radio" id="goo" name="player" value="グー">
    <label for="goo"><img src="img/janken_gu.png" class="g-img"></label>
    <input type="radio" id="choki" name="player" value="チョキ">
    <label for="choki"><img src="img/janken_choki.png" class="c-img"></label>
   <input type="radio" id="paa" name="player" value="パー">
    <label for="paa"><img src="img/janken_pa.png" class="p-img"></label>
    <p><input type="submit" class="button" value="出す手を選んでね！"></p>
</form>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>

$('#goo').click(function() {
     $('.g-img').css('border','5px solid #ffdead');
     $('.button').val('じゃんけん！');
 });

$('#choki').click(function() {
     $('.c-img').css('border','5px solid #ffdead');
     $('.button').val('じゃんけん！');
});

$('#paa').click(function() {
     $('.p-img').css('border','5px solid #ffdead');
     $('.button').val('じゃんけん！');
});

</script>

</body>
</html>