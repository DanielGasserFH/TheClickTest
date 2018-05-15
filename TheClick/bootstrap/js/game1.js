var myTestElement = document.getElementById("test");    //mit document.getElementById wird auf das gewünschte Element in der HTML datei zugegriffen
var anzahl = 0;
myTestElement.innerHTML= anzahl;
var seconds = 10;                               // hier werden die variablen erzeugt, die zum spielen nötig sind
var counting = true;

var timerInterval = null;

function startGame(){                           //mit dieser methode wird das spiel gestartet, in dem ein neuer intervall erzeugt wird (sofern es noch keinen gibt)
    if(timerInterval == null) {
        timerInterval = setInterval(timer,1000);
        spielnummer++;
    }
}
function resetGame() {                          //mit dieser methode wird das spiel zurückgesetzt, in dem die seconds wieder auf 10 gesetzt und die anzahl auf 0 gesetzt wird
    seconds = 10;
    anzahl = 0;
    counting = true;
}


function timer(){                               //mit dieser methode wird erreicht, dass ein benutzer nach ablauf der zeit nicht weiter klicken kann, in dem die variable counting auf false gesetzt wird
    seconds--;
    document.getElementById("counter").innerHTML = seconds + "s"
    if (seconds <= 0) {
        document.getElementById("counter").innerHTML = "Zeit um"; // wenn der intervall abgelaufen ist wird "zeit um" angezeigt
        $.ajax({
            'url':    'game1',
            'method': 'post',
            'data':    {'action': 'saveScore', 'attempts': numAttempts, 'score': anzahl},   // ajax methode um Daten zu speichern (funktioniert nicht (Vermutung: Game1Controller.php wird nicht gefunden))
            'success': function(receivedData) {
                if(receivedData.result) {
                    //after save change url to scoreboard
                    location.href = 'scoreboard';
                }
            }
        });
        counting=false;
        clearInterval(timerInterval);
        timerInterval = null;
    }
}





var myButton = document.getElementById("counter");          //das ist die eigentliche "spielmethode", hier wird (sofern counting true ist) die anzahl pro klick um 1 erhöht
    myButton.onclick = function () {
        if(counting==true) {
            anzahl++;
            myTestElement.innerHTML = anzahl;               //hier wird die variable anzahl am bildschirm angezeigt
        }
}

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

