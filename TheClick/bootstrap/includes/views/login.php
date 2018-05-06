<?php

echo $this->header;

?>
    <div class="container">
        <div class="row">
            <div class="col-lg-1 d-xs-none d-lg-block"></div>
            <div class="col-lg-4 col-xs-12 pt-lg-5 mt-lg-5">
    <!-- Erstellung Formular -->
    <form class="loginForm" method="post">
        <div class="hintergrundBlack">
            <h2>Login</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="E-mail / Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
            <div class="social">
                <p> or login with social media</p>
            </div>

            <div class="row">
                <a href="http://www.facebook.com/" target="_blank" class="btn btn-primary facebook col-12 col-lg-4"><i class="fa fa-facebook mr-1"></i>Facebook</a>
                <a href="http://www.twitter.com/" target="_blank" class="btn btn-primary twitter col-12 col-lg-4"><i class="fa fa-twitter mr-1"></i>Twitter</a>
                <a href="http://www.faceboook.com/" target="_blank" class="btn btn-primary gplus col-12 col-lg-4"><i class="fa fa-google-plus mr-1"></i>Google</a>
            </div>

            <div class="signIn">
                <p>Don´t have an account? <a href="registierung.html"> Register</a></p>
            </div>

        </div>

        <input type="hidden" name="action" value="login">

    </form>
            </div>
            <div class="col-lg-12 d-xs-none d-md-block"></div>
        </div>
    </div>

<?php

echo $this->footer;

?>