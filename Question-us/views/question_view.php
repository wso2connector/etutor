<?php
//var_dump($form_data);
if (!isset ($message)) $message = null;
if (!isset($form_action)) $form_action = "new";



?>

<div id="center-wdg-post">
    <div class="post-form">
        <?php
        $attributes = array(
            'class' => 'ask_question',
            'id' => '');
        echo form_open('question/save', $attributes);
        ?><br>

        <h2 class="head-text">New Question</h2>
        <?php echo validation_errors(); ?>

        <div id="alert-success">
            <?php
            echo show_message($message); ?>
        </div>


        <div class="row">
            <div class="col-lg-6">

                <form role="form">
                    <div class="form-group">
                        <?php echo form_dropdown('category_id', $cmb_category, $form_data['category_id'], 'class="form-control"', 'id="category"'); ?>
                    </div>

                    <div class="form-group">
                        <label>Question Title</label>
                        <input class="form-control" placeholder="Enter text" name="subject">
                    </div>

                    <div class="form-group">
                        <label>Question</label>
                        <textarea class="form-control" rows="3" name="post"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tags(Separate by commas)</label>
                        <textarea class="form-control" rows="1" name="tags"></textarea>
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon">Username</span>
                        <input type="text"  class="form-control" placeholder="username"
                               value="<?php echo $this->session->userdata('username'); ?>" disabled="disabled">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon">User Type</span>
                        <input type="text" class="form-control" placeholder="usertype"
                              value="<?php echo $this->session->userdata('usertype'); ?>" disabled="disabled">
                    </div>
                    <input type="hidden" name="username" value="<?php echo $this->session->userdata('username'); ?>" />
                    <input type="hidden" name="usertype" value="<?php echo $this->session->userdata('usertype'); ?>" />
                    <input type="hidden" name="form_action" value="new" />
                    <button type="submit" class="btn btn-default">Submit Question</button>

                </form>

            </div>

        </div>
        <!-- /.row -->

        <?php echo form_close(); ?>
    </div>
</div>