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
                    <a class="nav-link" href="game2.html">Game2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="game3.html">Game3</a>
                </li>
            </ul>


            <form class="form-inline my-2 my-lg-0">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <p class="nav navbar-nav navbar">Angemeldet als&#160;<strong class="username"><?php echo $this->username; ?></strong></p>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout">(Abmelden)</a></li>
                    </ul>

                </div>
            </form>

        </div>
    </nav>



    <div class="container-fluid" id="beschreibungen">
        <div class="container">
            <h1>
                Herzlich wilkommen zu TheClick
            </h1>
        </div>
        <div class="container">
            TheClick besteht aus 3 unterschiedlichen Clickspiel spielmodi:
        </div>
        <div class="container">
            <h1>
                Spiel 1:
            </h1>
            <p>
                Geschwindigkeit ist das Einzige was zählt!
                <br>
                <br>
                Bei diesem Spielmodus geht es darum, in 10 Sekunden so oft wie möglich auf den Button zu Clicken.
                <br>
                So einfach.
            </p>
        </div>
        <div class="container">
            <h1>
                Spiel 2:
            </h1>
            <p>
                Geschicklichkeit ist hier gerfagt!
                <br>
                <br>
                Bei Diesem Spielmodus geht es darum, in 30 Sekunden so oft wie möglich auf einen Button zu Clicklen.
                <br>
                Der Haken?
                <br>
                Jedes mal wenn du auf den Button Clickst verschwindet er und erscheint an einer anderen Stelle auf dem Spielfeld wieder.
            </p>
        </div>



<?php

echo $this->footer;

?>