<?php

echo $this->header;

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="main.html">TheClick</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="main.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="game1.html">Game1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Game2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="game3.html">Game3</a>
            </li>
        </ul>


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
        <div class="col "><button class="btn btn-danger testbutton" onclick="checkRed()" id="red">Red</button></div>
        <div class="col"><button class="btn btn-primary testbutton" onclick="checkBlue()" id="blue">Blue</button></div>
    </div>
    <div class="row justify-content-center">
        <div class="testklasse2" id="randomc"></div>
    </div>
    <div class="row">
        <div class="col"><button class="btn btn-success testbutton" onclick="checkGreen()" id="green">Green</button></div>
        <div class="col"><button class="btn btn-warning testbutton" onclick="checkYellow()" id="yellow">Yellow</button></div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/game3.js"></script>
</body>
</html>