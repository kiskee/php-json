<?php
session_start();
require __DIR__.'/partials/users.php';
if(is_authenticated()){
    redirect('index.php');
    die();
}
if($_SERVER['REQUEST_METHOD']== 'POST'){
   // print_r ($_POST);
   $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
   $password = $_POST['password'];
//compare with data store
if(aunthenticate_user($email,$password)){
    $_SESSION['email'] = $email;
    redirect('index.php');   
}else{
    $status = 'the privided credentials didnt not work';
    //echo '<script language="javascript">alert("the privided credentials didnt not work");</script>';
}
}
include 'partials/header.php';

?>
<br>

     
    <div class="container">
    
        <div class="card">

            <div >      
                <h1 class="card__title"><center>Login</center></h1>      
            </div> 
            
            <div class="input-group">
                <form action="" method="POST">
                    <label for="myInput" class="input-group__label">Email:</label>
                    <input type="text" name="email" id="email" class="input-group__input">
                    <label for="myInput" class="input-group__label">Password:</label>
                    <input type="password" name="password" id="password"  class="input-group__input">
                    <input type="submit" value="Login" name="login">
                    <a class="botton " href="register.php">
                        <span class="botton__text">Register Here</span>
                        <i class="botton__icon fas fa-arrow-right"></i>
                    </a>
                </form> 
            </div>
            <!--
            <br><br>-----------------
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

                <p class="login-register-text ">Don't have an account?
                    <a class="botton " href="register.php">
                        <span class="botton__text">Register Here</span>
                        <i class="botton__icon fas fa-arrow-right"></i>
                    </a>
                </p>
                <p> https://www.youtube.com/watch?v=DWHZSkn5paQ&t=1469s</p>
            
            </form>
-->
    </div>
    
    </div>

<br>

<?php
include 'partials/footer.php';
?>