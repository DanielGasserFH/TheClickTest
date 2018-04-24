var randomcolor = document.getElementById("randomc");
var count = document.getElementById("score");
var anzahlg3 = 0;
var secondsg3 = 25;
count.innerHTML = anzahlg3
var colors = ["red","blue","green","yellow"];
var counting3 = false;
var timerinterval3 = null;

function startGame(){
    if(timerinterval3 == null){
        timerinterval3 = setInterval(timerg3,1000)
        counting3 = true;
        document.getElementById("randomc").innerHTML = colors[Math.floor(Math.random()*4)]
        console.log("erfolgreich")
    }
}

function resetGame() {
    secondsg3 = 25;
    anzahlg3 = 0;
    counting3 = false;
}


function checkRed(){
    if(counting3==true){
        if(randomcolor.innerHTML=="red"){
            anzahlg3++;
            count.innerHTML = anzahlg3;
            randomcolor.innerHTML = colors[Math.floor(Math.random()*4)]
        }
    }
}
function checkGreen(){
    if(counting3==true){
        if(randomcolor.innerHTML=="green"){
            anzahlg3++;
            count.innerHTML = anzahlg3;
            randomcolor.innerHTML = colors[Math.floor(Math.random()*4)]
        }
    }
}
function checkBlue(){
    if(counting3==true){
        if(randomcolor.innerHTML=="blue"){
            anzahlg3++;
            count.innerHTML = anzahlg3;
            randomcolor.innerHTML = colors[Math.floor(Math.random()*4)]
        }
    }
}
function checkYellow(){
    if(counting3==true){
        if(randomcolor.innerHTML=="yellow"){
            anzahlg3++;
            count.innerHTML = anzahlg3;
            randomcolor.innerHTML = colors[Math.floor(Math.random()*4)]
        }
    }
}
function timerg3(){
    secondsg3--;
    document.getElementById("timer3").innerHTML = secondsg3 + "s"
    if (secondsg3 <= 0) {
        document.getElementById("timer3").innerHTML = "Game Over";
        // Anzahl speichern
        counting3=false;
        clearInterval(timerInterval3);
        timerInterval3 = null;
    }
}