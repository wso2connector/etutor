
<div id="ask_Question-home">
	<a href="<?php echo site_url()."/add_post/"; ?>">
	<input id="askBtn_h" class="btn" type="submit" value="+Ask Question" name="Submit"></a>

		<?php
        echo form_open('search/questions');
        ?>
        <div id="search-box">
        <?php echo form_input(array('id'=>'query','class'=>'form-control contact-input',
                                    'name'=>'query'));
              echo form_submit(array('id'=>'askBtn_s','class'=>'btn', 'value'=>'Search')); ?>
		</div>
    <?php echo form_close(''); ?>
<div id="qu-table">
	<h2 id="heading">Search Result</h2>

<table class="stable">
<?php
if(isset($search_result)){
?>
    <tbody id="table-body">
      <?php
      $count = count($search_result);
      $classToBeConvertedToJson = new stdClass();
      $classToBeConvertedToJson->count = $count;
      $classToBeConvertedToJson->results = $search_result;

      echo json_encode($classToBeConvertedToJson);
      /* foreach ($search_result as $row) {
        echo "<tr>";
        echo "<td class='intab'><div id='inner-table-1'><a href=''>".$row['subject']."</a></td>";
        echo "<td class='cmt'><div id='inner-table'><a href=''>".$row['post']."</a></div></td>";
        echo "<td class='cmt'><div id='inner-table'><a href=''>".$row['tags']."</a></div></td>";
        echo "<td class='subject'><div id='inner-table-2'><a href=''>".$row['username']."</a></td>";
        echo "</tr>";
      } */
      ?>
    </tbody>
<?php   
}
?>
</table>


</div>


</div>