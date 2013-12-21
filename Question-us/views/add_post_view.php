<?php

if(!isset ($message)) $message = null;
if(!isset($form_action)) $form_action = "new";

?>

<div id="sep-form">
<h2 class="head-text-link">You must Login to ask a aquestion</h1>
	<div id="create_account">
		<h4>If you don't alredy have an account please Join first</h3>
		<a class="home_link" href="<?php echo site_url()."/register/"; ?>">Click here to Join Now</a>
	</div>
	<div id="login-ask">
		<h4>If you alredy have an account Login to ask a question</h3>
		<a class="home_link" href="<?php echo site_url()."/login/logout";?>">Click here to Login</a>
	</div>
	<div id="login-ask">
		<h4>If you alredy Logged in your account Click hear to post a question</h3>
		<a class="home_link" href="<?php echo site_url()."/question/";?>">Click here to OPST</a>
	</div>
</div>
