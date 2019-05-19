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

<div class="main">
<h1>じゃんけんしよう！！</h1>

<p>花子ちゃんと太郎くん、どっちとじゃんけんする？</p>
</div>

<div class="form-out">
<form method="post" action="janken_01.php">
    <input type="radio" id="hanako" name="computer" value="花子ちゃん">
     <label for="hanako"><img src="img/pose1.png" class="top-img"></label>
     <input type="radio" id="taro" name="computer" value="太郎くん">
     <label for="taro"><img src="img/pose2.png" class="top-img"></label>
     </div>
    <p><input type="submit" class="button" value="対戦相手は？"></p>
</form>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>

$('#hanako').click(function() {
     $('.button').val('花子に決定!!');
 });

$('#taro').click(function() {
     $('.button').val('太郎に決定!!');
 });

</script>

</body>
</html>