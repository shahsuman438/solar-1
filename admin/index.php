<?php include 'header.php';?>



<body class="index_three">
<section class="s_login">
	<div class="ss_box_bg">
		<a href="../index.php"><img src="../assets/images/logo/logo.png" class="img-fluid" alt="logo"/></a>
		<div class="s_heading">
			<h2>Welcome to <span>Nepal Power Solution Pvt. Ltd.</span></h2>
			<p>Please Login To Your Account</p>
		</div>
		<form>
			<div class="s_input">
				<input type="text" name="email" id="email" placeholder="Enter Your Email" class="require" data-valid="email" data-error="Email should be valid."/>
				<svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20">
				  <path class="cls-red" d="M1683.01,874.054a1.125,1.125,0,1,0,0,2.249A1.125,1.125,0,0,0,1683.01,874.054Zm10.47,3.985a3.834,3.834,0,0,0,.01-3.886l-7.09-12.2a3.918,3.918,0,0,0-6.78,0l-7.09,12.21a3.83,3.83,0,0,0,.01,3.909,3.884,3.884,0,0,0,3.38,1.929h14.15A3.914,3.914,0,0,0,1693.48,878.039Zm-1.54-.881a2.137,2.137,0,0,1-1.87,1.074h-14.15a2.111,2.111,0,0,1-1.85-1.052,2.136,2.136,0,0,1-.01-2.145l7.1-12.206a2.136,2.136,0,0,1,3.7,0l7.09,12.206A2.088,2.088,0,0,1,1691.94,877.158Zm-9.21-11a1.228,1.228,0,0,0-.88,1.228c0.03,0.356.05,0.715,0.08,1.071,0.08,1.353.15,2.68,0.23,4.034a0.826,0.826,0,0,0,.85.791,0.837,0.837,0,0,0,.84-0.818,7.519,7.519,0,0,1,.03-0.819l0.15-2.6c0.03-.562.08-1.124,0.11-1.686a1.331,1.331,0,0,0-.11-0.562A1.131,1.131,0,0,0,1682.73,866.161Z" transform="translate(-1672 -860)"/>
				</svg>
			</div>
			<div class="s_input">
				<input type="password" placeholder="Enter Your Password" name="password" id="password" class="require" />
				<svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20">
				  <path class="cls-red" d="M1683.01,874.054a1.125,1.125,0,1,0,0,2.249A1.125,1.125,0,0,0,1683.01,874.054Zm10.47,3.985a3.834,3.834,0,0,0,.01-3.886l-7.09-12.2a3.918,3.918,0,0,0-6.78,0l-7.09,12.21a3.83,3.83,0,0,0,.01,3.909,3.884,3.884,0,0,0,3.38,1.929h14.15A3.914,3.914,0,0,0,1693.48,878.039Zm-1.54-.881a2.137,2.137,0,0,1-1.87,1.074h-14.15a2.111,2.111,0,0,1-1.85-1.052,2.136,2.136,0,0,1-.01-2.145l7.1-12.206a2.136,2.136,0,0,1,3.7,0l7.09,12.206A2.088,2.088,0,0,1,1691.94,877.158Zm-9.21-11a1.228,1.228,0,0,0-.88,1.228c0.03,0.356.05,0.715,0.08,1.071,0.08,1.353.15,2.68,0.23,4.034a0.826,0.826,0,0,0,.85.791,0.837,0.837,0,0,0,.84-0.818,7.519,7.519,0,0,1,.03-0.819l0.15-2.6c0.03-.562.08-1.124,0.11-1.686a1.331,1.331,0,0,0-.11-0.562A1.131,1.131,0,0,0,1682.73,866.161Z" transform="translate(-1672 -860)"/>
				</svg>
			</div>
			<div class="s_remember">
				<label>Remember Me
					<input type="checkbox">
					<span class="s_checkbox"></span>
				</label>
				<a href="forget.php">Forgot Password ?</a>
			</div>
			<div class="s_jump_page">
				<button type="button" class="ss_btn submitForm">login</button>
				<a href="signup.php" class="login_anchor">sign up</a>
				<div class="response"></div>
			</div>
		</form>
	</div>
</section>

</body>



<?php include 'footer.php';?>