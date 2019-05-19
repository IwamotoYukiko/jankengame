

var total = 0;
var win = 0;
var draw = 0;
var lose = 0;

function countUp(){
    total++;
}


function janken(){

    var radios = document.getElementsByName('player');

    if((document.form.player[0].checked==false)&& 
    (document.form.player[1].checked==false)&&
    (document.form.player[2].checked==false)) {
    alert("手が選択されていません。")
    return false;
    }
        
    var playernum = "";
    for (var i = 0; i < radios.length; i++){
        if(radios[i].checked){ 
			var playernum = radios[i].value;
			break;
        }
    }
    

    var comnum = Math.floor(Math.random()*3);

    var comhund; //コンピュータの手
    if(comnum == 0) {
        comhand = 'コンピューターは、ぐー<br><img src="janken_gu.png" height="150px" width="150px">';
    } else if(comnum == 1) {
        comhand = 'コンピューターは、ちょき<br><img src="janken_choki.png" height="150px" width="150px">';
    } else if(comnum == 2) {
        comhand = 'コンピューターは、ぱー<br><img src="janken_pa.png" height="150px" width="150px">';
    }

    var judge; //判定
    
    
    if(playernum == 0 && comnum == 1) {
        judge = "W I N";
        win ++;
    } else if(playernum == 1 && comnum == 2) {
        judge = "W I N";
        win ++;
    } else if(playernum == 2 && comnum == 0) {
        judge = "W I N";
        win ++;
    } else if(playernum == comnum) {
        judge = "DRAW";
        draw ++
    } else {
        judge = "LOSE";
        lose ++
    }

    


    document.getElementById("btn").value = "リトライ！" ;
    document.getElementById("computer").innerHTML = comhand;
    document.getElementById("shohai").innerHTML = judge;
    document.getElementById("percent").innerHTML= total　+ "戦 : " + win + "勝 " + draw　+ "引き分け " + lose + "敗";

}

function jump(){
    if (confirm("リセットされますが良いですか？")==true)
    document.getElementById("btn").value = "じゃんけんポン" ;
    document.getElementById("computer").innerHTML = "";
    document.getElementById("shohai").innerHTML = "";
    document.getElementById("percent").innerHTML= "";
    total=0;
    win=0;
    draw=0;
    lose=0;

}


