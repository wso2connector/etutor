		
<?php

if(!isset ($message)) $message = null;
if(!isset($form_action)) $form_action = "new";

?>

		<?php
		$attributes = array(
		    'class' => '',
		    'id' => '');
		echo form_open('ask_question/', $attributes);

		?>
<div id="ask_Question">
	<a href="<?php echo site_url()."/question/"; ?>"><input id="askBtn" class="btn" type="submit" value="+Ask Qauestion" name="Submit"/></a>
</div>