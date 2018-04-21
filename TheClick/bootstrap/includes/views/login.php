<?php

echo $this->header;

?>
    <form class="loginForm">
        <div class="hintergrundBlack">
            <h2>Login</h2>
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail / Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="button" class="btn btn-success" onclick="window.location.href='main.html'">Login</button>
            <div class="social">
                <p> or login with social media</p>
            </div>

            <div class="netzwerke">
                <a href="www.facebook.com" target="_blank"> <img src="Bilder/facebook.png"  width="150" height="43" alt="Facebook" /></a>
                <a href="www.twitter.com" target="_blank"> <img src="Bilder/twitter.png" width="150" height="43" alt="Twitter" /></a>
                <a href="www.google.com" target="_blank"> <img src="Bilder/google_plus.png" width="150" height="43" alt="Google" /></a>
            </div>

            <div class="signIn">
                <p>Don´t have an account? <a href="registierung.html"> Register</a></p>
            </div>

        </div>

    </form>
<?php

echo $this->footer;

?>