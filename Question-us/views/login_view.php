<?php

if(!isset ($message)) $message = null;
if(!isset($form_action)) $form_action = "new";

?>

<link rel='stylesheet' href='<?php echo base_url(); ?>resors/css/login.css' type='text/css' media='screen' charset='utf-8'>


		<?php
		$attributes = array(
		    'class' => '',
		    'id' => 'login_form');
		echo form_open('login/check', $attributes);

		?>
	<div id="login_page">
		
			<div class="login">
				
					<h1 class="text-center">Log in to your Accout</h1>
					<?php echo validation_errors(); ?><br><br><br><br>
				<div id="login_input">
					<div class="form-group-1">
						<label for="username">Username</label>
						<div class="input-group">
							<input id="Username" class="form-control" type="text" name="username" placeholder="Username" value="<?php echo set_value('username', $form_data['username']); ?>"  />
		    			</div>
		    		</div></br>
		    		<div class="form-group-1">
		    			<label for="password">Password</label>
		    			<div class="input-group">
		    				<input id="password" class="form-control" type="password" name="password" placeholder="Password" value="<?php echo set_value('password', $form_data['password']); ?>"  />
		 				</div>
		 			</div></br>
		 			<div class="form-group-button">
		 				<div class="input-group">
		 					<input id="btnLogin" class="btn btn-primary btn-block" type="submit" value="Login" name="Submit">
		 				</div>
		 			</div>
				</div>	
			</div>
	</div>






























