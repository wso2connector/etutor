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
                    <td><?php echo $row['username']; ?></td>
                    <td>
                        <p><?php echo $row['subject']; ?> <br/>
                            <?php echo $row['post']; ?></p></td>

                </tr>
                <tr class="success">
                    <td>
                        <div class="votecard">
                            <div>
                                <em><strong>12</strong><span>Vote</span></em>
                            </div>
                        </div>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>