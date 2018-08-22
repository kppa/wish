<!DOCTYPE html>
<html lang="en">
<?php
include_once 'header.php';
?>
	
<body>
	<!--header-->
	<?php
	include_once 'head.php';
	?>
	
	<div class="content indent">
		<div class="thumb-box">
			<div class="container">
				<h2>
					<strong>Existing Member? </strong>Login Now
				</h2>
				<?php 
					if(isset($msg)){
						echo '<span>'.$msg.'</span>';
					}				
				?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php
					
					if (! empty ( $error )) {
						?>
									<div id="error" class="alert alert-danger ">
						<ul>
								<?php echo $error; ?>
							</ul>
					</div>	
								
								<?php
					}
					?>
						<form method="post" action="/user/login">
						<div id="row" class="move-down">
							<input type="email" class="form-control" placeholder="Email"
								name="email" />
						</div>
						<div id="row" class="move-down">
							<input type="password" class="form-control"
								placeholder="Password: " name="password" />
						</div>
						<div id="row" class="move-down">
							<a href="/user/forgotpassword">Forgot Password?</a><br/>
							
						</div>
						<div id="row" class="move-down">
							<a href="/user/register">New User? Sign Up Now</a>
						</div>
						
						<div id="row" class="move-down">
							<input type="submit" class="btn btn-primary" value="Sign In">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	</div>
	<?php
	include_once 'footer.php';
	unset ( $error );
	unset ( $user_form );
	?>
	
</body>
</html>