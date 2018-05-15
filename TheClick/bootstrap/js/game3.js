var randomcolor = document.getElementById("randomc");
var count = document.getElementById("score");
var anzahlg3 = 0;
var secondsg3 = 25;
count.innerHTML = anzahlg3
document.getElementById("timer3").innerHTML = secondsg3 + "s";
var colors = ["red","blue","green","yellow"];                                       // Erstellung des Arrays für Zufallsfarbengenerierung durch Zufallszahlen
var counting3 = false;
var timerinterval3 = null;

function startGame(){                                                               //Start Game funktion, gleich wie andere Spiele + Zufallsnummer wird generiert und mit 4 multipliziert um Werte zw 0 und 3 zu erhalten
    if(timerinterval3 == null && secondsg3 > 0){                                    //rot: 0, blau:1, grün:2, gelb:3 (siehe Array)
        timerinterval3 = setInterval(timerg3,1000)
        counting3 = true;
        randomcolor.innerHTML = colors[Math.floor(Math.random()*4)]
        console.log("erfolgreich")
        spielnummer++;
    }
}

function resetGame() {                                                              //Standart ResetGame funktion siehe andere Spiele
    secondsg3 = 25;
    anzahlg3 = 0;
    counting3 = false;
    document.getElementById("timer3").innerHTML = secondsg3 + "s";
    count.innerHTML = anzahlg3;
    clearInterval(timerinterval3)
    timerinterval3 = null;
}


function checkRed(){                                                                //Funktion Checkt ob der richtige Button geklickt wurde
    if(counting3==true){
        if(randomcolor.innerHTML=="red"){                                           //checken ob red geclickt werden musste
            anzahlg3++;                                                             //wenn richtig: Score +, aktualisieren der innerHTMl vom Score und neues generieren einer Zufallszahl
            count.innerHTML = anzahlg3;
            randomcolor.innerHTML = colors[Math.floor(Math.random()*4)]
        } else {                                                                    //ansonsten Score -, aktualisieren der innerHTML vom Score
            anzahlg3--;
            count.innerHTML = anzahlg3;
        }
    }
}
function checkGreen(){                                                              //Funktion Checkt ob der richtige Button geklickt wurde
    if(counting3==true){
        if(randomcolor.innerHTML=="green"){                                         //checken ob green geclickt werden musste
            anzahlg3++;                                                             //wenn richtig: Score +, aktualisieren der innerHTMl vom Score und neues generieren einer Zufallszahl
            count.innerHTML = anzahlg3;
            randomcolor.innerHTML = colors[Math.floor(Math.random()*4)]
        } else {                                                                    //ansonsten Score -, aktualisieren der innerHTML vom Score
            anzahlg3--;
            count.innerHTML = anzahlg3;
        }
    }
}
function checkBlue(){                                                               //Funktion Checkt ob der richtige Button geklickt wurde
    if(counting3==true){
        if(randomcolor.innerHTML=="blue"){                                          //checken ob blue geclickt werden musste
            anzahlg3++;                                                             //wenn richtig: Score +, aktualisieren der innerHTMl vom Score und neues generieren einer Zufallszahl
            count.innerHTML = anzahlg3;
            randomcolor.innerHTML = colors[Math.floor(Math.random()*4)]
        } else {                                                                    //ansonsten Score -, aktualisieren der innerHTML vom Score
            anzahlg3--;
            count.innerHTML = anzahlg3;
        }
    }
}
function checkYellow(){                                                             //Funktion Checkt ob der richtige Button geklickt wurde
    if(counting3==true){
        if(randomcolor.innerHTML=="yellow"){                                        //checken ob red geclickt werden musste
            anzahlg3++;                                                             //wenn richtig: Score +, aktualisieren der innerHTMl vom Score und neues generieren einer Zufallszahl
            count.innerHTML = anzahlg3;
            randomcolor.innerHTML = colors[Math.floor(Math.random()*4)]
        } else {                                                                    //ansonsten Score -, aktualisieren der innerHTML vom Score
            anzahlg3--;
            count.innerHTML = anzahlg3;
        }
    }
}
function timerg3(){                                                                //standart Timer-Funktion
    if(counting3==true) {
        secondsg3--;
        document.getElementById("timer3").innerHTML = secondsg3 + "s"
        if (secondsg3 <= 0) {                                                      //Abbruch-Bedingung des Timers, counting wird auf false gestellt und Interval gecleart, AJAX aufgerufen
            document.getElementById("timer3").innerHTML = "Game Over";
            randomcolor.innerHTML = "Game Over"
            $.ajax({
                'url':    'game3',
                'method': 'post',
                'data':    {'action': 'saveScore', 'attempts': numAttempts, 'score': anzahlg3}, // ajax methode um Daten zu speichern (funktioniert nicht (Vermutung: Game3Controller.php wird nicht gefunden))
                'success': function(receivedData) {
                    if(receivedData.result) {
                        //after save change url to scoreboard
                        location.href = 'scoreboard';
                    }
                }
            });
            counting3 = false;
            clearInterval(timerinterval3);
            timerinterval3 = null;
        }
    }
}

//gets anzahl and spielnummer and sends them to the controler
function gameWon(numAttempts, score)
{
    spielnummer = numAttempts;
    anzahlg3 = score;

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