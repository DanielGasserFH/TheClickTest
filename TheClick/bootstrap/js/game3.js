var randomcolor = document.getElementById("randomc");
var count = document.getElementById("score");
var anzahlg3 = 0;
var secondsg3 = 25;
count.innerHTML = anzahlg3
document.getElementById("timer3").innerHTML = secondsg3 + "s";
var colors = ["red","blue","green","yellow"];
var counting3 = false;
var timerinterval3 = null;

function startGame(){
    if(timerinterval3 == null && secondsg3 > 0){
        timerinterval3 = setInterval(timerg3,1000)
        counting3 = true;
        randomcolor.innerHTML = colors[Math.floor(Math.random()*4)]
        console.log("erfolgreich")
    }
}

function resetGame() {
    secondsg3 = 25;
    anzahlg3 = 0;
    counting3 = false;
    document.getElementById("timer3").innerHTML = secondsg3 + "s";
    count.innerHTML = anzahlg3;
    clearInterval(timerinterval3)
    timerinterval3 = null;
}


function checkRed(){
    if(counting3==true){
        if(randomcolor.innerHTML=="red"){
            anzahlg3++;
            count.innerHTML = anzahlg3;
            randomcolor.innerHTML = colors[Math.floor(Math.random()*4)]
        } else {
            anzahlg3--;
            count.innerHTML = anzahlg3;
        }
    }
}
function checkGreen(){
    if(counting3==true){
        if(randomcolor.innerHTML=="green"){
            anzahlg3++;
            count.innerHTML = anzahlg3;
            randomcolor.innerHTML = colors[Math.floor(Math.random()*4)]
        } else {
            anzahlg3--;
            count.innerHTML = anzahlg3;
        }
    }
}
function checkBlue(){
    if(counting3==true){
        if(randomcolor.innerHTML=="blue"){
            anzahlg3++;
            count.innerHTML = anzahlg3;
            randomcolor.innerHTML = colors[Math.floor(Math.random()*4)]
        } else {
            anzahlg3--;
            count.innerHTML = anzahlg3;
        }
    }
}
function checkYellow(){
    if(counting3==true){
        if(randomcolor.innerHTML=="yellow"){
            anzahlg3++;
            count.innerHTML = anzahlg3;
            randomcolor.innerHTML = colors[Math.floor(Math.random()*4)]
        } else {
            anzahlg3--;
            count.innerHTML = anzahlg3;
        }
    }
}
function timerg3(){
    if(counting3==true) {
        secondsg3--;
        document.getElementById("timer3").innerHTML = secondsg3 + "s"
        if (secondsg3 <= 0) {
            document.getElementById("timer3").innerHTML = "Game Over";
            randomcolor.innerHTML = "Game Over"
            // Anzahl speichern
            counting3 = false;
            clearInterval(timerinterval3);
            timerinterval3 = null;
        }
    }
}