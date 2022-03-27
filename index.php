<?php
include 'partials/header.php';
?>

<div >
    <div >      
        <h1><center>Login</center></h1>      
    </div>  
    <div >
    <center>
        <div id="login"></div>
        <form action="" method="POST">
            <div >
                <label for="email">Email: </label><br>

                <input type="text" name="email" id="email"  class="form-control" />
            </div>
            
            <div >
                <label for="password">Password: </label><br>

                <input type="password" name="password" id="password"  class="form-control" />
            </div>
            <div >
                <input type="submit" value="Login" name="login">
            </div>
            <p> https://www.youtube.com/watch?v=DWHZSkn5paQ&t=1469s</p>
        
        </form>
</center>
    </div>
</div>


<?php
include 'partials/footer.php';
?>