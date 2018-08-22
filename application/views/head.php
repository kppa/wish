<header>
	<div class="box">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<p class="title1">
						Free phone: <strong>123-456-7890</strong>
					</p>
<!-- 					<p class="title2">Hours: 8am-8pm PST M-Th; 6am-3pm PST Fri</p> -->
				</div>
				<?php
				if (isset ( $user ) && empty($error)) {
					?>
						<div class="col-lg-4 col-md-4">
					<p class="title2">
						<strong>WelCome <?php echo $user['fName'].' '.$user['lName']?></strong>
					</p>

					<a href="/user/logout" class="btn-default btn1">Sign Out</a>

				</div>
						
						<?php
				} else {
					?>
						<div class="col-lg-4 col-md-4">
					<a href="/user/register" class="btn-default btn1">Register</a> <a
						href="/user/login" class="btn-default btn1">Sign In</a>
				</div>
						<?php
				}
				
				?>
				
			</div>
		</div>
	</div>
	<div class="container">
		<h1 class="navbar-brand navbar-brand_">
		
			<a href="/"><img src="/assets/img/logo.png" alt=""></a>
		</h1>
		<nav
			class="navbar navbar-default navbar-static-top tm_navbar clearfix"
			role="navigation">
			<ul class="nav sf-menu clearfix">
				<li><a href="index.html">Home</a></li>
				<li class="sub-menu"><a href="index-1.html">About</a><span
					class="fa fa-angle-down"></span>
					<ul class="submenu">
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Dolor sit amet</a><span class="fa fa-angle-right"></span>
							<ul class="submenu">
								<li><a href="#">Dolore ipsu</a></li>
								<li><a href="#">Consecte</a></li>
								<li><a href="#">Elit Conseq</a></li>
							</ul></li>
						<li><a href="#">Conse ctetur</a></li>
						<li><a href="#">Adipisicing</a></li>
						<li><a href="#">Elit sed do</a></li>
						<li><a href="#">Eiusmod tempor</a></li>
						<li><a href="#">Incididunt ut labore</a></li>
						<li><a href="#">Et dolore magna</a></li>
					</ul></li>
				<li><a href="index-2.html">Sell</a></li>
				<li><a href="index-3.html">Buy</a></li>
				<li class="active"><a href="index-4.html">Contact us</a></li>
			</ul>
		</nav>
	</div>
</header>