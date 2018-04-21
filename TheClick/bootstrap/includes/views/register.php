<?php

echo $this->header;

?>


    <form class="loginForm">
        <div class="hintergrundBlack">
            <h2>Create account</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="Max" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="max.musterman@gmail.com" aria-describedby="emailHelp" placeholder="E-mail">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="1234" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="1234" placeholder="Password (again)">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I have read and agree to the Terms of Use and Privacy Policy</label>
            </div>
            <button type="button" class="btn btn-success" onclick="window.location.href='login.html'">Create Account</button>
            <div class="social">
                <p> or sign up with social media</p>
            </div>

            <div class="netzwerke">
                <a href="www.facebook.com" target="_blank"> <img src="Bilder/facebook.png"  width="150" height="43" alt="Facebook" /></a>
                <a href="www.twitter.com" target="_blank"> <img src="Bilder/twitter.png" width="150" height="43" alt="Twitter" /></a>
                <a href="www.google.com" target="_blank"> <img src="Bilder/google_plus.png" width="150" height="43" alt="Google" /></a>
            </div>

            <div class="signIn">
                <p>Already have an account? <a href="login.html"> Sign in</a></p>
            </div>

        </div>

    </form>


<?php

echo $this->footer;

?>