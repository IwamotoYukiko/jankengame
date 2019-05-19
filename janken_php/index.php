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

<p>じゃんけん相手を選んでね！</p>
</div>

<div class="form-out">
<form method="post" action="janken_01.php">
    <input type="radio" id="cat" name="computer" value="ねこ">
     <label for="cat"><img src="img/pet_cat_sit.png" class="top-img"></label>
     <input type="radio" id="crab" name="computer" value="カニ">
     <label for="crab"><img src="img/crab_c.png" class="top-img"></label>
     <input type="radio" id="hanako" name="computer" value="花子ちゃん">
     <label for="hanako"><img src="img/pose1.png" class="top-img"></label>
     </div>
    <p><input type="submit" class="button" value="対戦相手は？"></p>
</form>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>

$('#cat').click(function() {
     $('.button').val('ねこ(難易度1)に決定!!');
 });

 $('#crab').click(function() {
     $('.button').val('カニ(難易度2)に決定!!');
 });


$('#hanako').click(function() {
     $('.button').val('花子(難易度3)に決定!!');
 });

</script>

</body>
</html>