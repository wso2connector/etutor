
<div id="ask_Question-home">
	<a href="<?php echo site_url()."/add_post/"; ?>">
	<input id="askBtn_h" class="btn" type="submit" value="+Ask Question" name="Submit"></a>

		<?php
		$attributes = array(
	    'class' => '',
        'id' => ''); 
        echo form_open('search/questions');
        ?>
        <div id="search-box">
       		<input type="text" id="tag" class="form-control contact-input" name ="query" value="" />
			    <input type="submit" id="askBtn_s" class="btn" value = "Search" />
		</div>

<div id="qu-table">
	<h2 id="heading">Search Result</h2>

<table class="stable">
<?php
if(isset($result)){
?>
    <tbody id="table-body">
      <?php
      foreach ($result as $row) {
        echo "<tr>";
        echo "<td class='intab'><div id='inner-table-1'><a href=''>".$row['subject']."</a></td>";
        echo "<td class='cmt'><div id='inner-table'><a href=''>".$row['post']."</a></div></td>";
        echo "<td class='subject'><div id='inner-table-2'><a href=''>".$row['username']."</a></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
<?php   
}
else
{
  //echo 'no record found';
}
?>
</table>


</div>

    <?php echo form_close('');?>
</div>