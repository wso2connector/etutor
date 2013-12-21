<div id="ask_Question-home">
	<a href="<?php echo site_url()."/add_post/"; ?>">
	<input id="askBtn_h" class="btn" type="submit" value="+Ask Qauestion" name="Submit"></a>
<div id="qu-table">
	<h2 id="heading">Active Members</h2>
	<table cellspacing="0" cellpadding="0" border="0" class="stable">
		<thead>
		</thead>
		<tbody id="">
			<?php
			foreach ($table_data as $row) {
				echo "<tr>";
				echo "<td><div id='mem-tab-1'>".$row['username']."</div></td>";
				echo "<td><div id='mem-tab-2'>".$row['email']."</div></td>";
				echo "<td><div id='mem-tab-3'>".$row['usertype']."</dvi></td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
<?php	echo $this->pagination->create_links(); ?>
</div>
</div>