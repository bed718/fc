<div class="user-login-block clearfix">
	<div class="close-btn"><a href="#">X</a></div>
	<div class="header">
		<h2>Login</h2>
	</div>
	<div class="login-form clearfix">
		<?php print $name; ?>
		<?php print $pass; ?>
		<?php print $submit; ?>
		<?php print $rendered; ?>
		<div class="forgot"><a href="/user/password">Forgot your password?</a></div>
	</div>
	<div class="signup-btns clearfix">
		<div class="signup">Sign up</div>
		<div class="arrow"><img src="/fc/<?php print path_to_theme(); ?>/images/FC_signup_arrow.png" /></div>
		<div class="user"><a href="/fc/user/register">User</a></div>
		<div class="or">or</div>
		<div class="charity"><a href="/fc/charity/register">Charity</a></div>
		
	</div>
	<div class="footer">
		Sign up to access all Fresh Charities has to offer. <a href="/learn-more">Click here to learn more.</a>
	</div>
</div>