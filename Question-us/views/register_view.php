<script>

</script>
<div id="sep-form">
    <h2 class="head-text">Create your FREE Ask Question Account</h2>
    <br>
    <div id="left-wdg">
<!--         <li>Create your account in seconds</li>
        <li>Solve Problems</li>
        <li>Share Expertise</li>
        <li>Join Growing IT / Developer Community</li>
        <li>381,158 members</li> -->
    </div>
    
    <div id="center-wdg">

<!--         <div id="msg-wrapper">
            <?php //echo show_message($message); ?>
        </div> -->


        <?php
        $attributes = array(
        'class' => '',
        'id' => 'register'); 
        echo form_open('register/save' , $attributes); 
        ?>
            <?php echo validation_errors(); ?>
            <div class="form-group">
                <label for="user_name">Username<label>
                <input type="text" name="username" class="form-control contact-input" id="" placeholder="User Name" value="<?php echo set_value('username', $form_data['username']); ?>">
                <input type="hidden" name="form_action" class="form-control" id="" placeholder="User Name" value="new">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control contact-input" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo set_value('email', $form_data['email']); ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control contact-input" id="exampleInputPassword1" placeholder="Password" value="<?php echo set_value('password', $form_data['password']); ?>">
            </div>
            <div class="form-group">
                <label for="password">User Type</label>
                <?php $option = array(
                                ''=> 'Select Type',
                                'student'=>'Student',
                                'tutor'=>'Tutor'                        
                                );
                        echo form_dropdown('usertype',$option,'st','class="form-control contact-select-td"') ?>
            </div>
            <button type="submit" class="btn btn-default">Joni Now >></button>
        <?php echo form_close(); ?>
    </div>

    <div id="right-wdg">
<!--         <h4>Already a member?</h4>
        <ul>
            <li>
                <a href="<?php echo site_url()."/login/"; ?>">Sign in >></a>
            </li>
            <li>
                <a hrer="">Forget your password</a>
            </li>
            <li>
                <a href="">Report Registration Problem</a>
            </li>
        </ul> -->
    </div>


</div>