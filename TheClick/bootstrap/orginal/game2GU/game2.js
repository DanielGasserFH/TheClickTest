var myTestElement = document.getElementById("test");
var anzahl = 0;
myTestElement.innerHTML= anzahl;
var seconds = 25;
var spielnummer= 0;

var timerInterval = null;

var gameboard = $('#gameboard');
var button = $('#counter');

var game2Started = false;


function newPosition() {
    //1. die groesse des gameboards feststellen

    var gameboardWidth = gameboard.width() - 10 - button.width();
    var gameboardHeight = gameboard.height() - 10 - button.height();

    //2. zwei werte (x und y) im bereich von 0 bis gameboardbreite bzw. gameboardhoehe erzeugen
    var newX = Math.floor(Math.random() * gameboardWidth);
    var newY = Math.floor(Math.random() * gameboardHeight);

    //3. dem button diese neuen koordinaten geben

    button.css({
        'top': newY + 'px',
        'left': newX + 'px'
    });
}

function startGame(){
    if(timerInterval == null) {
        timerInterval = setInterval(timer,1000);
        spielnummer++
    }
    game2Started = true;
}
function resetGame() {
    seconds = 25;
    anzahl = 0;
    game2Started = false;

}

function timer(){
    seconds--;
    document.getElementById("counter").innerHTML = seconds + "s"
    if (seconds <= 0) {
        document.getElementById("counter").innerHTML = "Zeit um";
        // Anzahl speichern
        game2Started=false;
        clearInterval(timerInterval);
        timerInterval = null;
    }
}


var myButton = document.getElementById("counter");
myButton.onclick = function () {
    if(game2Started) {
        anzahl++;
        myTestElement.innerHTML = 'Score: ' + anzahl;
        newPosition();

    }

};

function gameWon(numAttempts, score)
{
    spielnummer = numAttempts;
    anzahl = score;

    $.ajax({
        'url':    'game1',
        'method': 'post',
        'data':    {'action': 'saveScore', 'attempts': numAttempts, 'score': score},
        'success':
            function(receivedData)
            {
                if(receivedData.result)
                {

                }
            }
    });

}