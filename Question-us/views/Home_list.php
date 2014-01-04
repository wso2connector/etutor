<div class="row">
    <div class="col-lg-6">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped Membersorter">

                <tbody>

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
                    <td><p><?php echo anchor('answer/?id='.$row['question_id'],
                                'Answer', array('class'=>'btn btn-primary btn-lg')); ?></p></td>

                </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>