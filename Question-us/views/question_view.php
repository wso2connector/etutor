 <script>
 	$(function() {
		$('#datepicker').datepicker({minDate: 0});
		$( "#datepicker" ).datepicker();
		var myDate = new Date();
		var prettyDate =(myDate.getMonth()+1) + '/' + myDate.getDate() + '/' +
		myDate.getFullYear();
		$("#datepicker").val(prettyDate);
		});
 </script>

<?php
//var_dump($form_data);
if(!isset ($message)) $message = null;
if(!isset($form_action)) $form_action = "new";



?>
	
<div id="center-wdg-post">
	<div class="post-form">
	<?php
	$attributes = array(
    'class' => 'ask_question',
    'id' => '');
	echo form_open('question/save' , $attributes);
	?><br>
	<h2 class="head-text">New Discussion / Question</h2>
	<?php echo validation_errors(); ?>

	<div id="msg-wrapper1">
	<?php
	 echo show_message($message); ?>
	</div>

	<div class="form-group">
		<label for="category_id">Category</label>
			<?php echo form_dropdown('category_id', $cmb_category, $form_data['category_id'],'class="form-control contact-select"','id="category"'); ?>
            <?php echo form_error('category_id'); ?>
        
	</div>
<!-- 	<div class="form-group">
			<label for="category_id">Category</label>
			<?php //echo form_dropdown('sub_category_id', $sub_scmb_category, $form_data['sub_category_id'], 'class="form-control contact-select"','id="sub_category"'); ?>
            <?php// echo form_error('csub_category_id'); ?>
    </div> -->
	<div class="form-group">
		<label for="subject">Question Title</label>
		<input id="" type="text" class="form-control contact-input" name="subject" value="">
		<input type="hidden" name="form_action" class="form-control" id=""  value="new">
	</div>
	<div class="form-group">
		<input  type="date" id="date" name="date" value="" style="display:none;">
	</div>
	<div class="form-group">
		<label for="post">Question(Post)</label>
		<textarea id="" rows="5" class="form-control-text contact-input" cols="20" name="post" value=""></textarea>
	</div>
    <div class="form-group">
        <label for="tags">Tags (separate by commas)</label>
        <textarea id="" rows="2" class="form-control-text contact-input" cols="20" name="tags" value=""></textarea>
    </div>
	<div class="form-group">
		<label for="username">User Name</label>
		<input id="" type="text" name="username" class="form-control contact-input" readonly style="border-color:#03F" value="<?php echo $this->session->userdata('username');?>">
	</div>
	<div class="form-group">
		<label for="email">E-mail</label>
		<input id="" type="text" name="email" class="form-control contact-input" readonly style="border-color:#03F" value="<?php echo $this->session->userdata('email');?>">
	</div>
	<div class="form-group">
		<input id="" type="hidden" name="usertype" class="form-control contact-input" readonly style="border-color:#03F" value="<?php echo $this->session->userdata('usertype');?>">
	</div>
	<div class="form-group">
		 <input id="btn-post" class="btn btn_login btn-primary btn-block" type="submit" value="Submit Discussion" name="Submit">
	</div>	

<?php echo form_close(); ?>
</div>
</div>