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
            <table class="table table-bordered table-hover table-striped Membersorter">
                <tr class="active">
                    <td><?php echo $row['username']; ?></td>
                    <td>
                        <p><?php echo $row['subject']; ?> <br/>
                            <?php echo $row['post']; ?></p></td>
                    <td><p><?php echo $row['tags']; ?></p></td>

                </tr>

            </table>

            <table class="table table-bordered table-hover table-striped Membersorter">
                <?php
                foreach ($table_data as $row) {
                    ?>
                    <tr class="active">
                        <td>
                            <div class="votecard">
                                <div>
                                    <em><strong>5</strong><span>Vote</span></em>
                                </div>
                            </div>
                        </td>
                        <td><?php echo $row['username']; ?></td>
                        <td>
                            <p><?php echo $row['subject']; ?> <br/>
                                <?php echo $row['post']; ?></p></td>
                        <td><p><?php echo $row['tags']; ?></p></td>

                    </tr>
                <?php } ?>

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
            <button type="submit" class="btn btn-default">Submit Answer</button>

            <?php echo form_close(); ?>
        </div>

    </div>