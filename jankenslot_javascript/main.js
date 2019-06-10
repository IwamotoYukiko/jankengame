'use strict'
{
const section = document.querySelector('section');

const start = document.getElementById('start');
 start.classList.add('start');
 start.textContent = 'START';

 const images = [
    'janken_gu.png',
    'janken_choki.png',
    'janken_pa.png'
];

let comNum;

const img = document.createElement('img');
img.src = images[0];

section.insertBefore(img, start);

let timeoutId = undefined;


function play() {
    img.src = getRandomImage();
    comNum = Math.floor(Math.random() * 3);
        switch (comNum) {
            case 0:
                img.src = "janken_gu.png";
                break;
            case 1:
                img.src = "janken_choki.png";
                break;
            case 2:
                img.src = "janken_pa.png";
                break;
        }

    timeoutId = setTimeout(()=>{ 
        play() 
    },60);
}
 
function getRandomImage(){
     return images[Math.floor(Math.random() * images.length)]
 }

start.addEventListener('click',()=>{
     start.classList.remove('start');
     start.textContent = null;
    play();
});

const gu = document.getElementById('gu');
const choki = document.getElementById('choki');
const pa = document.getElementById('pa');

gu.addEventListener('click',()=>{
    gu.classList.add('hand');
    retry.classList.remove('hidden');
    reset.classList.remove('hidden');
    clearTimeout(timeoutId);
    if (comNum === 0) {
        drawFunc();
    }
    else if (comNum === 1) {
        winFunc();
    } else {
        loseFunc();
    }
});

choki.addEventListener('click',()=>{
    choki.classList.add('hand');
    retry.classList.remove('hidden');
    reset.classList.remove('hidden');
    clearTimeout(timeoutId);
    if (comNum === 0) {
        loseFunc();
    }
    else if (comNum === 1) {
        drawFunc();
    } else {
        winFunc();
    }
});

pa.addEventListener('click',()=>{
    pa.classList.add('hand');
    retry.classList.remove('hidden');
    reset.classList.remove('hidden');
    clearTimeout(timeoutId);
    if (comNum === 0) {
        winFunc();
    }
    else if (comNum === 1) {
        loseFunc();
    } else {
        drawFunc();
    }
});

const retry = document.getElementById('retryBtn');
const reset = document.getElementById('resetBtn');

retry.addEventListener('click',()=>{
    gu.classList.remove('hand');
    choki.classList.remove('hand');
    pa.classList.remove('hand');
    start.classList.remove('win');
    start.classList.remove('drawlose');
    start.textContent = null;
   play();
});

let win =0;
let draw =0;
let lose =0;

function winFunc() {
    win ++;
    start.classList.add('win');
    start.textContent = 'WIN';
    result();
}

function drawFunc() {
    draw ++;
    start.classList.add('drawlose');
    start.textContent = 'DRAW';
    result();
}

function loseFunc() {
    lose ++;
    start.classList.add('drawlose');
    start.textContent = 'LOSE';
    result();
}

reset.addEventListener('click',()=>{
    resetFunc();
});

function result(){
    document.getElementById("result").innerHTML=  win + "勝 " + draw　+ "引き分け " + lose + "敗";
    } 

function resetFunc(){
    alert('リセットされます。');
    gu.classList.remove('hand');
    choki.classList.remove('hand');
    pa.classList.remove('hand');
    start.classList.remove('win');
    start.classList.remove('drawlose');
    start.classList.add('start');
    start.textContent = 'START';
    win =0;
    draw =0;
    lose =0;
    document.getElementById("result").innerHTML= null;
}

}