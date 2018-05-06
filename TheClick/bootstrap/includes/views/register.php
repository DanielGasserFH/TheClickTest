<?php

echo $this->header;

?>

    <?php if($this->registerSuccessful): ?>

    <!--Hinweis dass die Registierung erfolgreich war.-->
    <div id="main">
        <div class="row">
            <h1 class="col-7">Registierung erfolgreich</h1>
        </div>
        <div class="col-5">Sie sind nun registiert.<br>
            <a href="login">Klicken Sie hier um sich anzumelden.</a>

            <p>Viel Spaß beim Spielen!</p>
        </div>
    </div>


    <?php else: ?>

<!-- Registrierung -->
    div class="container">
    <div class="row">
        <div class="col-lg-1 d-xs-none d-lg-block"></div>
        <div class="col-lg-4 col-xs-12 pt-lg-5 mt-lg-5">

<!-- Registierungsformular -->
    <form class="loginForm" method="post">
        <div class="hintergrundBlack">
            <h2>Create account</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="Max" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="max.musterman@gmail.com" name="email" aria-describedby="emailHelp" placeholder="E-mail">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="1234" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="1234" name="password2" placeholder="Password (again)">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I have read and agree to the Terms of Use and Privacy Policy</label>
            </div>
            <button type="submit" class="btn btn-success">Create Account</button>

            <div class="signIn">
                <p>Already have an account? <a href="login.html"> Sign in</a></p>
            </div>

        </div>

        <input type="hidden" name="action" value="register">

    </form>

    </div>
    <div class="col-lg-12 d-xs-none d-md-block"></div>
    </div>
    </div>

    <?php endif; ?>


<?php

echo $this->footer;

?>