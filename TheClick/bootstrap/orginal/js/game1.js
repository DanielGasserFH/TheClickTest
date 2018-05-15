var myTestElement = document.getElementById("test");
var anzahl = 0;
myTestElement.innerHTML= anzahl;
var seconds = 10;
var counting = true;
var spielnummer= 0;

var timerInterval = null;

function startGame(){
    if(timerInterval == null) {
        timerInterval = setInterval(timer,1000);
    }

    spielnummer++

}
function resetGame() {
    seconds = 10;
    anzahl = 0;
    counting = true;
}


function timer(){
    seconds--;
    document.getElementById("counter").innerHTML = seconds + "s";
    if (seconds <= 0) {
        document.getElementById("counter").innerHTML = "Zeit um";
        // Anzahl speichern
        counting=false;
        clearInterval(timerInterval);
        timerInterval = null;
    }
}

var myButton = document.getElementById("counter");
    myButton.onclick = function () {
        if(counting==true) {
            anzahl++;
            myTestElement.innerHTML = anzahl;

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
