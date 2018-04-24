<?php

echo $this->header;

?>
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
            <!--<div class="netzwerke">
                <a href="www.facebook.com" target="_blank"> <img src="Bilder/facebook.png"  width="150" height="43" alt="Facebook" /></a>
                <a href="www.twitter.com" target="_blank"> <img src="Bilder/twitter.png" width="150" height="43" alt="Twitter" /></a>
                <a href="www.google.com" target="_blank"> <img src="Bilder/google_plus.png" width="150" height="43" alt="Google" /></a>
            </div>-->

            <div class="signIn">
                <p>Don´t have an account? <a href="registierung.html"> Register</a></p>
            </div>

        </div>

        <input type="hidden" name="action" value="login">

    </form>
<?php

echo $this->footer;

?>