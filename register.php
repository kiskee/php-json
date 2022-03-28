<?php
session_start();
require __DIR__.'/partials/users.php';
ensure_user_is_authenticated();
$users = getUsers();
include 'partials/header.php';

?>
<center>

<div id="login">
		<div class="login-screen">
			<div class="app-title">
				<h1 class="border">Sas Login</h1>
			</div>
<form action="" method="post" class="login-email">
<div class="login-form">
    <?php echo $error??''; ?>
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