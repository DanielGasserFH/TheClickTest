<?php

echo $this->header;

?>

    <?php if($this->registerSuccessful): ?>
    <h1>Registrierung erfolgreich ... hier gehts zum login</h1>
    <?php else: ?>
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
    <?php endif; ?>


<?php

echo $this->footer;

?>