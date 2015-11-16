<!DOCTYPE HTML>
<html>
<?php
	$page_title = 'Login';
	include '_components/head.php'; 
?>
<body>
	<?php include '_components/header.php'; ?>
	<div class="login">
	  	<div class="wrap">
			<div class="col_1_of_login span_1_of_login">
				<div class="login-title">
	       			<h4 class="title">Registered Customers</h4>
				 	<div class="comments-area">
						<form>
							<p>
								<label>Name</label>
								<span>*</span>
								<input type="text" value="">
							</p>
							<p>
								<label>Password</label>
								<span>*</span>
								<input type="password" value="">
							</p>
							 <p id="login-form-remember">
								<label><a href="#">Forget Your Password ? </a></label>
							 </p>
							 <p>
								<input type="submit" value="Login">
							</p>
						</form>
					</div>
		      	</div>
			</div>
			<div class="col_1_of_login span_1_of_login">
				<h4 class="title">New Customer?</h4>
				<div class="button1">
					<a href="register.html" class="btn"><button>Register an account!</button></a>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
    <?php include '_components/footer.php'; ?>
</body>
</html>