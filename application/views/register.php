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
					<strong>New User Registration</strong>
				</h2>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						<p></p>
						<h3>Register Now For Free !!</h3>
						<span class="">Existing User? <a href="/user/login" >Login Now</a></span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<?php 
					
							if(!empty($error)){
								?>
									<div id="error" class="alert alert-danger">
							<ul>
								<?php echo $error; ?>
							</ul>
						</div>	
								
								<?php 
							}
						?>
							
						<form method="post" action="/user/register">
						<div id="row" class="move-down">
								<div class="left col-lg-5 col-md-5 col-sm-5 col-xs-12 move-down">
									<input type="text" class="form-control" placeholder="First Name"
									name="fName" value = "<?php echo isset($user_form['fName']) ? $user_form['fName'] : ''; ?>"/>
								</div>
								<div class="col-lg-2  col-md-2 col-sm-2">
									
								</div>
								<div class= "right col-lg-5 col-md-5 col-sm-5 col-xs-12 move-down">
								<input type="text" class="form-control" placeholder="Last Name"
									name="lName" value = "<?php echo isset($user_form['lName']) ? $user_form['lName'] : ''; ?>" />
								</div>
							</div>
							<div id="row" class="move-down">
								<input type="email" class="form-control" placeholder="Email"
									name="email"  value = "<?php echo isset($user_form['email']) ? $user_form['email'] : ''; ?>"/>
							</div>
							<div id="row" class="move-down">
								<div class="left col-lg-5 col-md-5 col-sm-5 col-xs-12 move-down">
									<input type="password" class="form-control" placeholder="Password "
									name="password"  />
								</div>
								<div class="col-lg-2  col-md-2 col-sm-2">
									
								</div>
								<div class= "right col-lg-5 col-md-5 col-sm-5 col-xs-12 move-down">
								<input type="password" class="form-control" placeholder="Confirm Password :"
									name="cPasswd"  />
								</div>
							</div>
							<div id="row" class="move-down">
								<input type="text" class="form-control"
									placeholder="Address 1 " name="address_1"  value = "<?php echo isset($user_form['address_1']) ? $user_form['address_1'] : ''; ?>"/>
							</div>
							<div id="row" class="move-down">
								<input type="text" class="form-control"
									placeholder="Address 2 " name="address_2"  value = "<?php echo isset($user_form['address_2']) ? $user_form['address_2'] : ''; ?>" />
							</div>
							<div id="row" class="move-down">
								<input type="text" class="form-control"
									placeholder="City " name="city"  value = "<?php echo isset($user_form['city']) ? $user_form['city'] : ''; ?>"/>
							</div>
							<div id="row" class="move-down">
								<input type="text" class="form-control"
									placeholder="State " name="State"  value = "<?php echo isset($user_form['State']) ? $user_form['State'] : ''; ?>"/>
							</div>
							<div id="row" class="move-down">
								<input type="text" class="form-control"
									placeholder="Zip Code " name="zip_code"  value = "<?php echo isset($user_form['zip_code']) ? $user_form['zip_code'] : ''; ?>"/>
							</div>
							<div id="row" class="move-down">
								<input type="text" class="form-control"
									placeholder="United States Of America " name="country"  disabled/>
							</div>
							<div id="row" class="move-down">
								<input type="submit" class="btn btn-primary" value="Register">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
	<?php
	include_once 'footer.php';
	unset($error);
	unset($user_form);
	?>
	
</body>
</html>