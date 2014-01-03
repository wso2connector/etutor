<div class="row">
    <div class="col-lg-12">
        <h1>
            <small>Search Results</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-edit"></i> Search</li>
        </ol>

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-lg-6">
        <?php
        echo form_open('search/questions');
        ?>
        <div class="form-group">
            <?php echo form_input(array('id' => 'query', 'class' => 'form-control contact-input',
                'name' => 'query'));
            echo form_submit(array('id' => 'askBtn_s', 'class' => 'btn btn-default', 'value' => 'Search')); ?>
        </div>
        <?php echo form_close(''); ?>
    </div>
</div>

<?php
if (isset($search_result)) {
    ?>
    <?php
    $count = count($search_result);
    $classToBeConvertedToJson = new stdClass();
    $classToBeConvertedToJson->count = $count;
    $classToBeConvertedToJson->results = $search_result;

    echo json_encode($classToBeConvertedToJson);

    ?>

<?php
}
?>


