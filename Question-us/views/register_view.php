<div class="row">
    <div class="col-lg-6">
        <?php
        $attributes = array(
            'class' => '',
            'id' => 'register');
        echo form_open('register/save', $attributes);
        ?>
        <?php echo validation_errors(); ?>

        <div class="form-group input-group">
            <input type="text" class="form-control" placeholder="Username" name="username"
                   value="<?php echo set_value('username', $form_data['username']); ?>">
        </div>

        <div class="form-group input-group">
            <input type="text" class="form-control" placeholder="Email" name="email"
                   value="<?php echo set_value('email', $form_data['email']); ?>">
        </div>

        <div class="form-group input-group">
            <input type="password" class="form-control" placeholder="Password" name="password"
                   value="<?php echo set_value('password', $form_data['password']); ?>">
        </div>

        <div class="form-group">
            <label for="password">User Type</label>
            <?php $option = array(
                '' => 'Select Type',
                'student' => 'Student',
                'tutor' => 'Tutor'
            );
            echo form_dropdown('usertype', $option, 'st', 'class="form-control contact-select-td"') ?>
        </div>
        <input type="hidden" name="form_action" value="new" />
        <button type="submit" class="btn btn-default">Join Now</button>

        <?php echo form_close(); ?>
    </div>
</div>

