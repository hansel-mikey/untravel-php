<h2>Hello!, Welcome to Untravell </h2>
<video autoplay muted loop id="videoBG">
    <source src="login_background .mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<link rel="stylesheet" href="sigin.css">
		<form action="process_siginup.php" method="post">
			<h1>Create Account</h1>
			
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name"  name="name"/>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="password"/>
			<input type="password" placeholder="password" name="conformation_password"/>
			<button>Sign Up</button>
		</form>
		
	</div>
	<div class="form-container sign-in-container">
		<form action="backend_login.php" method="post">
			<h1>Sign in</h1>
			
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="sigin.js"></script>
<!-- this for the registraion popup  -->
<?php
session_start();
if(isset($_SESSION['registration_success']) && $_SESSION['registration_success']) {
    echo '<div id="popup" class="successPopup" style="color: yellow; font-weight: bold;"><p>Registration Successful! Welcome to Untravell.</p></div>';
    $_SESSION['registration_success'] = false; // Set the session variable to false after rendering the pop-up
}
?>
<!-- this is the script of poup of the registration  -->
<script>
	
document.addEventListener("DOMContentLoaded", function() {
    var successPopup = document.getElementById("popup");
    if (successPopup) {
        successPopup.style.display = "block";
        setTimeout(function() {
            successPopup.style.display = "none";
        }, 5000); // Hide the pop-up after 5 seconds
    }
});
</script>
