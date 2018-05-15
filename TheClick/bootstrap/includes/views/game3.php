<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="scss/game3.css">

</head>
<body>

<style>
    .testklasse {background-color: #FFFFFF; position: relative}                                             /* Style für das anzeigen der Randomcolor */
    .testklasse2 { border-radius: 50%; background-color: #FFFFFF; height: 100px; width: 100px;
        position:absolute; z-index: 2;top:50%; left: 50%; margin-left: -50px; margin-top: -55px;
        text-align: center;}
    .testbutton { display: block}
    .testklasse2 #randomc{position: relative; text-align: center; margin-top: 35px}
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="main.html">TheClick</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Verlinkung Menü -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="main.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="game1.html">Game1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="game2.html">Game2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="game3.html">Game3</a>
            </li>
        </ul>

<!-- Hinweis wer angemeldet ist und Logout -->
        <form class="form-inline my-2 my-lg-0">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <p class="nav navbar-nav navbar">Angemeldet als&#160<strong class="username"><?php echo $this->username; ?></strong></p>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout">(Abmelden)</a></li>
                </ul>

            </div>
        </form>

    </div>
</nav>

<div class="loginForm container">
    <button type="button" id="timer3"></button>
    <div class="row justify-content-center"><div id="score"></div></div>
    <button onclick="startGame()" id="startg3">Start</button>
    <button onclick="resetGame()" id="resetg3">Reset</button>
</div>
<div class="container loginForm testklasse">
    <div class="row">
        <div class="col "><button class="btn btn-danger testbutton" onclick="checkRed()" id="red">Red</button></div>                <!-- Button Red, mit der Funktion checkRed() siehe game3.js danger für rote Farbe-->
        <div class="col"><button class="btn btn-primary testbutton" onclick="checkBlue()" id="blue">Blue</button></div>             <!-- Button Blue, mit der Funktion checkBlue() siehe game3.js primary für blaue Farbe-->
    </div>
    <div class="row justify-content-center">
        <div class="testklasse2"><div id="randomc"></div></div>
    </div>
    <div class="row">
        <div class="col"><button class="btn btn-success testbutton" onclick="checkGreen()" id="green">Green</button></div>          <!-- Button Green, mit der Funktion checkGreen() siehe game3.js success für grüne Farbe-->
        <div class="col"><button class="btn btn-warning testbutton" onclick="checkYellow()" id="yellow">Yellow</button></div>       <!-- Button Yellow, mit der Funktion checkYellow() siehe game3.js warning für gelbe Farbe-->
    </div>
</div>

<div class="leaderboard">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/game3.js"></script>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Score</th>
        </tr>
        </thead>
        <tbody>
        <?php $index = 1; ?>
        <?php foreach ($this->scores as $score): ?>
            <tr>
                <th scope="row"><?php echo $index; ?></th>
                <td><?php echo $score->username; ?></td>
                <td><?php echo $score->overallPoints; ?></td>
            </tr>
            <?php $index++; ?>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>



</body>
</html>