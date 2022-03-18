

<section class="card mt-3 mb-3">
	<div class="card-body">
		<h1 class="card-title">Sign In</h1>

		<?php
// $cookie_name = "user";
// $cookie_value = "John Doe";
setcookie('test1', 'testtt'); // 86400 = 1 day
?>
		<?php Errors::get( $errors ); ?>
		<?php 
			// print_r($cookie);
			// echo $cookie['user_name'];
		?>
		<form action="" method="POST">
			<div class="form-group">
				<label for="user-name">Name</label>
				<input type="text" name="user-name" id="user-name" class="form-control" max="255" 
					<?php if (!empty($cookie)) {?> value= <?php echo '"'.$cookie['user_name'].'"'; } ?> required>
			</div>

			<div class="form-group">
				<label for="user-password">Password</label>
				<input type="password" name="user-password" id="user-password" class="form-control" max="255" 
					<?php if (!empty($cookie)) {?> value= <?php echo '"'.$cookie['user_password'].'"'; } ?> required>
			</div>
			<div class="form-group">
				<input type="checkbox" name="remember" id="remember" <?php if (!empty($cookie)) {?> checked <?php } ?>>
				<span>Remember me</span>
			</div>

			<button type="submit" name="sign-in" class="btn btn-primary">Sign In</button>
			<a href="/" class="btn btn-light">Cancel</a>
		</form>

		<p class="card-text text-center mt-3">You don't have an account? <a href="/users/sign_up">Sign Up</a>.</p>
	</div>
</section>
