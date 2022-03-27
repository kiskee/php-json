<?php
include 'partials/header.php';
error_reporting(0);
?>
<br>
<div >
     
    <div >
    <center>
        <div id="login">
        <div >      
        <h1><center>Login</center></h1>      
    </div> 
        <form action="" method="POST">
            <div >
                <label for="email">Email: </label><br>

                <input type="text" name="email" id="email"  class="form-control" />
            </div>

            <div >
                <label for="password">Password: </label><br>

                <input type="password" name="password" id="password"  class="form-control" />
            </div>
            <br>
            <div >
                <input type="submit" value="Login" name="login">
            </div>

            <p class="login-register-text ">Don't have an account? <a href="register.php">Register Here</a></p>
            <p> https://www.youtube.com/watch?v=DWHZSkn5paQ&t=1469s</p>
        
        </form>

    </div>
    </center>
    </div>
</div>
<br>

<?php
include 'partials/footer.php';
?>