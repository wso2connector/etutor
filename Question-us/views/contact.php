<div>
	<div id="center-wdg-ct">
	<h2 class="head-text-ct">Contact Us</h2>
	 <?php
        $attributes = array(
        'class' => '',
        'id' => ''); 
        echo form_open(''); 
        ?>
            <?php echo validation_errors(); ?>
            <div class="form-group">
                <label for="name">Name<label>
                <input type="text" name="name" class="form-control contact-input" id="" placeholder="your Name" value="">
            </div>

            <div class="form-group">
                <label for="email">Email<label>
                <input type="text" name="email" class="form-control contact-input" id="" placeholder="your Email" value="">
            </div>

            <div class="form-group">
                <label for="message">Message<label>
                <textarea placeholder="Message....." id="input-textarea" rows="" cols="25" name="message" value=""></textarea>
            </div>

            
            <button type="submit" class="btn btn-default">Send Message>></button>
        <?php echo form_close(); ?>
	</div>

	 <div id="right-wdg-contact">
	 	<div class="after-contact">
	 	<br>
		<h4>Just Befor you send.....<hr/></h4>
	 	<p>if you would prefer to discuss in person or over the
			phone.please include the nessasary details in your message 
			and<br/	><strong> we will get back to you as soon as possible.</strong>
		</p>
		<br>
		<img id="hotline" src="<?php echo base_url(); ?>resors/images/skype.png" width="20" height="20"/> <h6>Call TOLL FREE <strong> +942823255 (Sri Lanka) </strong></h6>
		<img id="hotline" src="<?php echo base_url(); ?>resors/images/contact.png" width="20" height="20"/><h6> Hot Line <strong> 011-2539692 / +942255425 </strong></h6>
		<img id="hotline" src="<?php echo base_url(); ?>resors/images/mail.png" width="20" height="20"/><h6> Email Address <strong>qus@quickanswer.com</strong></h6>

	 	</div>
	 </div>

</div>