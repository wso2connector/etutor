<?php
$title = (isset($title)) ? $title : "";
$_scripts = (isset($_scripts)) ? $_scripts : "";
$_styles = (isset($_styles)) ? $_styles : "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <title>Textile <?php print $title ?></title>
    <?= $_scripts ?>
    <?= $_styles ?>
   
    <script src="<?php echo base_url(); ?>rsnasna/menu.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>rsnasna/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>rsnasna/js/jquery-ui-1.8.21.custom.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url(); ?>rsnasna/js/jquery.js" type="text/javascript"></script>

	<link href="<?php echo base_url(); ?>rsnasna/drop-down-menu.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>rsnasna/main.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>rsnasna/jquery-ui-1.8.21.custom.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>rsnasna/css/nasna_view.css" type="text/css" rel="stylesheet" />
	 <link href="<?php echo base_url(); ?>rsnasna/css/nasna_view2.css" type="text/css" rel="stylesheet" />
      <link href="<?php echo base_url(); ?>rsnasna/css/nasna_view3.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>rsnasna/css/nasna_view4.css" type="text/css" rel="stylesheet" />

	
	
<style type="text/css">
/*Stripe table */
.stable td{
padding:2px 11px;
border-bottom:1px solid #95bce2;
}

.stable .alt{
background:#ecf6fc;
}

.stable .over{
background:#bcd4ec;
}


body {
background-color:#CCC;
margin:           40px;
font-family:      Lucida Grande, Verdana, Sans-serif;
font-size:        12px;
color:            #000;
}


h1 {
font-weight:      normal;
font-size:        14px;
color:            #990000;
margin:        0 0 4px 0;
}

a {
 color: #069;
 text-decoration: underline;
}
a:hover {
 color: #900;
}

p {
 line-height: 1.55;
}



#msg-wrapper .info,
#msg-wrapper .success,
#msg-wrapper .warning,
#msg-wrapper .error {
border: 1px solid;
margin: 15px 0px;
padding:15px 20px 15px 55px;
width: 90%;
font: bold 12px verdana;
-moz-box-shadow: 0 0 5px #888;
-webkit-box-shadow: 0 0 5px#888;
box-shadow: 0 0 5px #888;
text-shadow: 2px 2px 2px #ccc;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
}
#msg-wrapper .info {
color: #00529B;
background: #BDE5F8 url('<?php echo base_url(); ?>rsnasna/images/icon-info.png') no-repeat 10px center;
}
#msg-wrapper .success {
color: #4F8A10;
background: #DFF2BF url('<?php echo base_url(); ?>rsnasna/images/icon-tick.png') no-repeat 10px center;
}
#msg-wrapper .warning {
color: #9F6000;
background: #FEEFB3 url('<?php echo base_url(); ?>rsnasna/images/icon-warning.png') no-repeat 10px center;
}
#msg-wrapper .error {
color: #D8000C;
background: #FFBABA url('<?php echo base_url(); ?>rsnasna/images/icon-cross.png') no-repeat 10px center;
}


/*Title Bar*/
#titlebar{
    border:1px solid #3d5542;
    display:block;
    padding:5px;
    margin-top:5px;
    margin-bottom:5px;
    -moz-box-shadow: 0 0 2px #888;
    -webkit-box-shadow: 0 0 2px#888;
    box-shadow: 0 0 2px #888;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}

#titlebar #title{
    width:60%;
    float:left;
    text-shadow: 2px 2px 2px #ccc;
    font: bold 12px verdana;
}

#titlebar #buttons{
    width:38%;
    float:right;
    text-align:right;
}

.clear{
    clear:both;
}

.action{
    width:80px;
}

thead th{
    height:20px;
    background:#043810;
    color:#ffffff;
}

a{
    border:none;
    text-decoration:none;
}
img{
    border:none;
}

/* Buttons */
.ui_tab_btn{
    display:block;
    float:left;
    margin-right:5px;
    margin-bottom:5px;
}

.ui_label_btn img{
   
}

.ui_label_btn span{
    margin-left:5px;
}


/*Scroll pane*/
#scroll-pane{
overflow-x:auto;
width:900px;
}

/* myform style */
.myform {
    border:1px solid #e1e1e5;
    margin-top:10px;
    font-size:12px;
    font-family:Vardana, Helvetica, sans-serif ;
    padding-top:10px;
}

.myform  dl{
    clear:both;
    margin-bottom:10px;
    position:relative;

}

.myform  dt{
    float:left;
    width:200px;
    padding-left:20px;
}

.myform  dd{
    float:left;
    width:400px;
}

.myform .required{
    color:red;
}

.myform .ferror{
    font-size:9px;
    color:red;
}
.clear{
    clear:both;
}
</style>


<script type="text/javascript">
    
$(document).ready(function(){
$(".stable tbody tr").mouseover(function(){$(this).addClass("over");}).mouseout(function(){$(this).removeClass("over");});
$(".stable tbody tr:even").addClass("alt");
});

//$(function() {
//        $("table tbody tr:nth-child(even)").addClass("alt");
//      });

function ajaxPagination(a){
	$.ajax({
      type: "GET",
      url: $(a).attr('href'),
      success: function(html){
        $("#selectlist_content").html(html);
      }
    }); 
	$(a).attr('href','#');              
   	return false;	
}
</script>

</head>
<body>
   
   <!-- Begin Wrapper -->
   <div id="wrapper">
         <!-- Begin Header -->
         <div id="header">
		      Welcome
              <br><?php echo $this->session->userdata('user_name');?></br>	
              <br><a href="<?php echo site_url()."/login/logout";?>">SignOut</a></br>	   
		 </div>
		 <!-- End Header -->
	 
		<!-- Begin Navigation -->
		 <div id="navgation">     

                    <ul id="menu">
                    
                    <li>
                            <a href="<?php echo site_url()."/home/"; ?>" title="Home" class="selected">Home</a>
                    </li>
                    
                    <li>
                            <a href="#" title="Order">Order</a>
                            <ul>
                             <li><a href="#" title="Sample">Sample</a>
                             <ul>
                             <li><a href="<?php echo site_url()."/header_sample_request/"; ?>" title="Sample Request">Sample Request</a></li>
                             <li><a href="<?php echo site_url()."/sample_details/"; ?>" title="Sample Details">Sample Details</a></li>
                             <li><a href="<?php echo site_url()."/sample_fabric_details/"; ?>" title="Sample Fabric">Sample Fabric</a></li>
                             <li><a href="<?php echo site_url()."/sample_trim_details/"; ?>" title="Sample Trim">Sample Trim</a></li>
                             <li><a href="<?php echo site_url()."/sample_valueaddition_details/"; ?>" title="Sample Valueaddition ">Sample Valueaddition</a></li>
                             <li><a href="<?php echo site_url()."/sample_packing_details/"; ?>" title="Sample Packing">Sample Packing</a></li>
                             </ul>
                             
                             </li>
                              <li><a href="#" title="Pre Cost">Pre Cost</a>
                              <ul>
                              <li><a href="<?php echo site_url()."/header_precost/"; ?>" title="Header Precost">Header Precost</a></li>
                              <li><a href="<?php echo site_url()."/precost_fabric_details/"; ?>" title="Precost Fabric">Precost Fabric</a></li>
                              <li><a href="<?php echo site_url()."/precost_trim_details/"; ?>" title="Precost Trim">Precost Trim</a></li>
                              <li><a href="<?php echo site_url()."/precost_valueaddition_details/"; ?>" title="Precost Valueaddition">Precost Valueaddition</a></li>
                              <li><a href="<?php echo site_url()."/precost_packing_details/"; ?>" title="Precost Packing">Precost Packing</a></li>
                              </ul>
                              
                              </li>
                               <li><a href="#>" title="Required">Required</a>
                               <ul>
                               <li><a href="<?php echo site_url()."/required_attachment/"; ?>" title="Required Attachment">Required Attachment</a></li>
                               <li><a href="<?php echo site_url()."/required_machine/"; ?>" title="Required Machine">Required Machine</a></li>
                               <li><a href="<?php echo site_url()."/required_thread/"; ?>" title="Required Thread">Required Thread</a></li>
                               </ul>
                               
                               </li>
                                <li><a href="<?php echo site_url()."/header_smv/"; ?>" title="SMV">SMV</a></li>
                            <li><a href="<?php echo site_url()."/header_order_booking/"; ?>" title="Order Booking">Order Booking</a></li>
                            </ul>
                    </li>
          
                    <li><a href="#" title="Configuration">Configuration</a>
                    <ul>
                    
                    	
                        <table border="0" cellpadding="0" cellspacing="0"><tr>
                                <td><li><a href="<?php echo site_url()."/unit/"; ?>" title="Unit">Unit</a></li></td>
                    <td><li><a href="<?php echo site_url()."/country/"; ?>" title="Country">Country</a></li></td></tr>
                    <tr>
                    <td><li><a href="<?php echo site_url()."/delivery/"; ?>" title="Delivery">Delivery</a></li></td>
                    <td><li><a href="<?php echo site_url()."/season/"; ?>" title="Season">Season</a></li></td></tr>
                    <tr>
                    <td><li><a href="<?php echo site_url()."/valueaddition/"; ?>" title="Value Addition">Value Addition</a></li></td>
                    <td><li><a href="<?php echo site_url()."/fabric_type/"; ?>" title="Fabric Type">Fabric Type</a></li></td></tr>
                    <tr>
                    <td><li><a href="<?php echo site_url()."/trim_type/"; ?>" title="Trim Type">Trim Type</a></li></td>
                    <td><li><a href="<?php echo site_url()."/garmenttype/"; ?>" title="Garmenttype Type">Garment Type</a></li></td></tr>
                    <tr>
                    <td><li><a href="<?php echo site_url()."/sampletype/"; ?>" title="Sample Type">Sample Type</a></li></td>
                    <td><li><a href="<?php echo site_url()."/orderstatus/"; ?>" title="Order Status">Order Status</a></li></td></tr>
                    <tr>
                    <td><li><a href="<?php echo site_url()."/paymentterm/"; ?>" title="Payment Term">Payment Term</a></li></td>
                    <td></td>
                    </tr>
                   </table>
                    
                    </ul>
                    
                    </li>
                    <li><a href="#" title="customer">Customer</a>
                    		<ul>
                            <li><a href="<?php echo site_url()."/buyer/"; ?>" title="Buyer">Buyer</a></li>
                    		<li><a href="<?php echo site_url()."/customer/"; ?>" title="Customer">Customer</a></li>
                            <li><a href="<?php echo site_url()."/customer_contact_person/"; ?>" title="Customer Contact Person">Cus Contact</a></li>
                            </ul>
                            
                    </li>
                    <li><a href="#" title="supplier">Supplier</a>
                    <ul>
                    <li><a href="<?php echo site_url()."/supplier/"; ?>" title="Supplier">Supplier</a></li>
                    <li><a href="<?php echo site_url()."/supplier_contact_person/"; ?>" title="Supplier Contact Person">Sup Contact</a></li>
                    </ul>
                    </li>


                    <li><a href="#" title="user_account">User Account</a>
                    <ul>
                     <li><a href="<?php echo site_url()."/user/"; ?>" title="Change Password">Change Password</a></li>
                     <li><a href="<?php echo site_url()."/user/add/"; ?>" title="Add User">Add User</a></li>
                     <li><a href="<?php echo site_url()."/permission/"; ?>" title="Permission">Permission</a></li>
                     <li><a href="<?php echo site_url()."/role_permission/"; ?>" title="Role Permission">Role Permission</a></li>
                     <li><a href="<?php echo site_url()."/role/"; ?>" title="Role">Role</a></li>
                    </ul>
                    
                    </li>


                    </ul>
                     <div class="clear"></div>
		 </div>
		 <!-- End Navigation -->
		 
		 <!-- Begin Content -->
		 <div id="content">
		  <?php print $content ?>		  
		 </div>
		 <!-- End Content -->
 
		 <!-- Begin Footer -->
		 <div id="footer">       
			   Copyright  @ Designed by eRav Technologies					    
	     </div>
		 <!-- End Footer -->
   </div>
   <!-- End Wrapper -->  
   
</body>
</html>