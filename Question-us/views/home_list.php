
<div id="ask_Question-home">
	<a href="<?php echo site_url()."/add_post/"; ?>"><input id="askBtn_h" class="btn" type="submit" value="+Ask Qauestion" name="Submit"></a>
<div id="qu-table">
	<h2 id="heading">Best solution for your Questions </h2>
	<table cellspacing="0" cellpadding="1" border="0" class="stable">
		<thead>
		</thead>
		<tbody id="table-body">
			<?php
			foreach ($table_data as $row) {
				echo "<tr id='home-tab'>";
				echo "<td class='intab'><div id='inner-table-1'><a href=''>".$row['username']."<span id='says'> Says:</span></a><br><br></br><a class='answer' href='".site_url().'/answer/?id='.$row['question_id']."'>Add Answer</a></td>";
				echo "<td class='subject'><div id='inner-table-2'><a href=''>".$row['subject']."</a></td>";
				echo "<td class='cmt'><div id='inner-table'><a href=''>".$row['post']."</a></div></td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</div>
</div>