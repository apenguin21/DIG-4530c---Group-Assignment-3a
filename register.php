<!DOCTYPE HTML>
<html>
<?php
	$page_title = 'Register';
	include '_components/head.php'; 
?>
<body>
	<?php include '_components/header.php'; ?>

	<div class="register_account">
	  	<div class="wrap">
	    	<h4 class="title">Create an Account</h4>
			<form>
				<div>
					<div><input type="text" value="Name"></div>
					<div><input type="text" value="E-Mail"></div>
					<div><input type="text" value="password"></div>
				</div>
			    <div>
				    <button class="grey">Submit</button>
				    <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
				    <div class="clear"></div>
			    </div>
			</form>
		</div> 
	</div>

    <?php include '_components/footer.php'; ?>
</body>
</html>