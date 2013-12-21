<?php
require_once 'includes/initialize.php' ;
require_once 'ajax/config.php';
require_once'dompdf/dompdf_config.inc.php';
$id= isset($_REQUEST['id']) ? $_REQUEST['id'] : "" ;
$timestamp=time();
$html="<html><body>";
$html.= "<br>";
//$html.="<p align='right'>".strfTime("DATE :%d-%m-%y  ",$timestamp)."</p>";
$html.="<img src='images/logo.jpg' height='50px' align='left' />";
$html.="<br>";
$html.="<br>";
$html.="<br>";
$html.="<center><FONT face='Modern No. 20' color='A52A2A' size=6><center> Quotation For Items</center></font>";
	$html.="<br>";
$html.="<br>";
	
		$query33="SELECT c.name,c.tele,c.address,c.mobile,c.email,qh.id FROM quotation_head qh,customer c WHERE c.id=qh.customer_id AND qh.id=1 ";
		   
		   $sql33=mysql_query($query33);
		   	$row33=mysql_fetch_array($sql33);
 $html.="<table border='0' align='center'  >";
 $html.="<tr>";
 $html.="<th align='left'>Quotation no :</th><td >".$row33['id']."</td><th align='left'>Issued date :<th><td>".strfTime("%d-%m-%y  ",$timestamp)."</td><tr>";
 $html.="<th align='left'>Customer name :</th><td >".$row33['name']."</td><th align='left'>Customer Telephone :<th><td>".$row33['email']."</td><tr>";
 $html.="<th align='left'>Customer mobile :</th><td >".$row33['mobile']."</td><th align='left'>Customer Telephone :<th><td>".$row33['address']."</td><tr>";
 $html.="<table>";
   
   
   
    $pdf = new DOMPDF();
	$pdf->load_html($html);
	$pdf->set_paper('A4', '');
	$pdf->render();
	$pdf->stream("Items Allocated For Customer - Report.pdf");
  
 $html.="</body></html>";                                           
   

?>
