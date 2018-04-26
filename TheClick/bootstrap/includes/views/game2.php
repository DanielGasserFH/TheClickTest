<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/game2.css">
    <link rel="stylesheet" href="css/index.css">



</head>
<body>

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
                <a class="nav-link" href="game2.html">Game2</a>
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



<button class="button" onclick="startGame()">Start</button>
<button class="button" onclick="resetGame()">Reset</button>

<div class="container" id="gameboard">

    <div id="test"> </div>

    <div class="button" id="button">
        <button type="button" id="counter"></button>
    </div>


</div>




<div class="container">

    <p>Leaderboard</p>

</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/game2.js"></script>

</body>
</html>

