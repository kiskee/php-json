<?php
session_start();
require __DIR__.'/partials/users.php';
//ensure_user_is_authenticated();
$users = getUsers();
include 'partials/header.php';

$user=[
    'id' => '',
    'username' => '',
    'email' => '',
    'phone' => '',
    'password' => '',
    'cpassword' => ''
];

if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $valid = true;
    if(!filter_var($username,FILTER_VALIDATE_REGEXP,array("options" => array("regexp"=>'/^[a-zA-Z]+$/')))){
        $error = '<div class="alert alert-dismissible alert-warning text-center">
                    the Username only contain letters
                 </div>';
        $valid = false;
    }
    if(!filter_var(
        $email,FILTER_VALIDATE_REGEXP,array(
             "options" => array("regexp"=>"/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/")
        ))){
        $error = '<div class="alert alert-dismissible alert-warning">
        enter a valid email
     </div>';
        $valid = false;
    }
    if(!filter_var($phone,FILTER_VALIDATE_REGEXP,array(
        "options" => array("regexp"=>"/^[0-9\-\+]{9,15}$/")
    ))){
        $error = '<div class="alert alert-dismissible alert-warning">
        enter a valid phone
     </div>';
        $valid = false;
    }
    if(!filter_var($password,FILTER_VALIDATE_REGEXP,array(
        "options" => array("regexp"=>'/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[*-.]).{6,}$/')
    ))){
        $error = '<div class="alert alert-dismissible alert-warning">
        enter a valid password
     </div>';
        $valid = false;
    }
    if(!filter_var($cpassword,FILTER_VALIDATE_REGEXP,array(
        "options" => array("regexp"=>'/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[*-.]).{6,}$/')
    ))){
        $error = '<div class="alert alert-dismissible alert-warning">
        enter a valid password
     </div>';
        $valid = false;
    }
    if($valid){
        if($password == $cpassword){
            $user = createUser($_POST);
            redirect('index.php'); 
    
        }else{
            echo "<script>alert('Password Not Matched.')</script>";
    
            
        }






    }


   
}

?>
<center>

<div id="login">
		<div class="login-screen">
			<div class="app-title">
				<h1 class="border">Sas Login</h1>
			</div>
<form action="" method="post" class="login-email">
<div class="login-form">
    <div id="error">
    <?php echo $error??''; ?>
    </div>
    <label for="name">UserName: </label><br>
    <input type="text" name="name"  required value="<?php echo $username??''; ?>" placeholder="Only contains letters"><br>
    <label for="name">Email: </label><br>
    <input type="text" name="email" required value="<?php echo $email??''; ?>" placeholder="ej: email@email.com"><br>
    <label for="name">Phone Numer: </label><br>
    <input type="text" name="phone" required value="<?php echo $phone??''; ?>" placeholder="ej: +30189505XX"><br>
    <label for="name">Password: </label><br>
    <input type="password" name="password" required value="<?php echo $password??''; ?>" placeholder="Min 6 chart,one Uppercase,Must conaine one of(*-.)"><br>
    <label for="name">Confirm Password: </label><br>
    <input type="password" name="cpassword" required value="<?php echo $cpassword??''; ?>"><br><br>
    <div class="input-group">
		<button name="submit"  class="btn border">Register</button>
	</div>
    <p class="login-register-text">Have an account? <a href="login.php">Login Here</a></p>
</div>
</form>
</div>
	</div>
    <br>
</center>


<?php
include 'partials/footer.php';
?>