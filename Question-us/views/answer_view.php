<?php
if (!isset ($message)) $message = null;
if (!isset($form_action)) $form_action = "new";
?>
<div id="anwersheet">
    <?php
    $attributes = array(
        'class' => '',
        'id' => '');

    ?>
    <div class="row">
        <div class="col-lg-6">
            <h1><small>Question</small></h1>
            <table class="table table-bordered table-hover table-striped Membersorter">
                <tr class="active">
                    <td><?php echo $question['username']; ?></td>
                    <td>
                        <p><?php echo $question['subject']; ?> <br/>
                            <?php echo $question['post']; ?></p></td>
                    <td><p><?php echo $question['tags']; ?></p></td>

                </tr>

            </table>



            <?php echo form_open('answer/save', $attributes); ?>
            <div class="form-group">
                <label>Answer</label>
                <textarea class="form-control" rows="3" name="answer"></textarea>
            </div>

            <div class="form-group input-group">
                <span class="input-group-addon">Username</span>
                <input type="text" class="form-control" placeholder="username"
                       value="<?php echo $this->session->userdata('username'); ?>" disabled="disabled">
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">User Type</span>
                <input type="text" class="form-control" placeholder="usertype"
                       value="<?php echo $this->session->userdata('usertype'); ?>" disabled="disabled">
            </div>
            <input type="hidden" name="username" value="<?php echo $this->session->userdata('username'); ?>"/>
            <input type="hidden" name="usertype" value="<?php echo $this->session->userdata('usertype'); ?>"/>
            <input id="" type="hidden" class="form-control" name="post" value='<?php echo $id ?>'>
            <input type="hidden" name="form_action" value="new"/>
            <button type="submit" class="btn btn-default">Submit Answer</button> <br /> <br />

            <?php echo form_close(); ?>
            <h1><small>Previous Answers</small></h1>
            <table class="table table-bordered table-hover table-striped Membersorter">
                <?php
                if ( isset($table_data) ) {
                foreach ($table_data as $row) {
                    ?>
                    <tr class="active">
                        <td><?php echo $row['username']; ?></td>
                        <td>
                            <p><?php echo $row['answer']; ?> <br/></p>
                        </td>

                    </tr>
                <?php }
                }
                else { ?>
                    <tr class="active">
                        <td><p>Currently, there are no answers for this question.</p></td>


                    </tr>
                <?php }?>




            </table>
        </div>

    </div>