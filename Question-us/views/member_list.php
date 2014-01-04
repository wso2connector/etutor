<div class="row">
    <div class="col-lg-12">
        <h1><small>Active Members</small></h1>
        <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-table"></i> Members</li>
        </ol>
    </div>
</div><!-- /.row -->

<div class="row">
    <div class="col-lg-6">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                <tr>
                    <th>Username <i class="fa fa-sort"></i></th>
                    <th>Email <i class="fa fa-sort"></i></th>
                    <th>User Type <i class="fa fa-sort"></i></th>

                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($table_data as $row) { ?>
                    <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></div></td>
                    <td><?php echo $row['usertype']; ?></div></td>
                    </tr>
                <?php }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div><!-- /.row -->