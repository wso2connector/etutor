<?php

if (!isset ($message)) $message = null;
if (!isset($form_action)) $form_action = "new";

?>
<div class="row">
    <div class="col-lg-6">
        <?php
        $attributes = array(
            'class' => 'form-horizontal',
            'id' => 'login_form');
        echo form_open('login/check', $attributes);
        if ($message != null) {
            echo "<div class=\"alert-danger\">$message</div><br/><br/>";
        }
        ?>




        <div class="form-group input-group">
            <input type="text" class="form-control" placeholder="Username" name="username"
                   value="<?php echo set_value('username', $form_data['username']); ?>">
        </div>

        <div class="form-group input-group">
            <input type="password" class="form-control" placeholder="Password" name="password"
                   value="<?php echo set_value('password', $form_data['password']); ?>">
        </div>

        <button type="submit" class="btn btn-default">Login</button>
        <?php echo anchor('login/forgotpwd', 'Forgot Password?'); ?>

    </div>
</div>




























