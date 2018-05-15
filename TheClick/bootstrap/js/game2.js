var myTestElement = document.getElementById("test");            //mit document.getElementById wird auf das gewünschte Element in der HTML datei zugegriffen
var anzahl = 0;
myTestElement.innerHTML= anzahl;
var seconds = 25;

var timerInterval = null;

var gameboard = $('#gameboard');
var button = $('#counter');

var game2Started = false;


function newPosition() {                                        // diese methode teilt dem button eine neue position zu und sorgt dadurch für die bewegung des buttons
    //1. die groesse des gameboards feststellen

    var gameboardWidth = gameboard.width() - 10 - button.width();   //-10 -buttonwidth , damit der button nicht aus dem container raussteht
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

function startGame(){                               //diese methode startet das spiel, indem ein ein intervall erzeugt wird (sofern noch keines existiert)
    if(timerInterval == null) {
        timerInterval = setInterval(timer,1000);//setzt die variable game2started auf true um spielen zu können.
        spielnummer++;
    }
    game2Started = true;
}
function resetGame() {                             //diese Methode startet das spiel neu indem die variable seconds wieder auf 25 gesetzt wird und sie anzahl zurückgesetzt wird
    seconds = 25;
    anzahl = 0;
    game2Started = false;

}

function timer(){
    seconds--;
    document.getElementById("counter").innerHTML = seconds + "s"            //stellt den timer auf dem button dar
    if (seconds <= 0) {
        document.getElementById("counter").innerHTML = "Zeit um";           //wenn seconds 0 ist steht auf dem button zeit um.
        game2Started=false;
        clearInterval(timerInterval);                                       //ausserdem wird das intervall gelöscht und die game2started wieder auf false gesetzt, dass man nicht mehr klicken kann
        timerInterval = null;

        $.ajax({
            'url':    'game2',
            'method': 'post',
            'data':    {'action': 'saveScore', 'gametype': 2, 'score': anzahl},   // ajax methode um Daten zu speichern (funktioniert nicht (Vermutung: Game1Controller.php wird nicht gefunden))
            'success': function(receivedData) {
                if(receivedData.result) {
                    //after save change url to scoreboard
                    //location.href = 'scoreboard';
                    location.reload();
                }
            }
        });

    }
}


var myButton = document.getElementById("counter");
myButton.onclick = function () {                                            //diese methode regelt das raufzählen der variable anzahl pro klick und sorgt dafür, dass die anzahl als score dargestellt wird
    if(game2Started) {
        anzahl++;
        myTestElement.innerHTML = 'Score: ' + anzahl;
        newPosition();                                                      //hier wird dem button eine neue position zugeschrieben in dem die oben beschriebene methode newPosition() aufgerufen wird

    }

};

//gets anzahl and spielnummer and sends them to the controler
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