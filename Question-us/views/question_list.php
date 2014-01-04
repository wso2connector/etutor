<div class="row">
    <div class="col-lg-6">
        <div class="table-responsive">
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
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div>