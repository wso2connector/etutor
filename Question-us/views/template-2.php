<?php
$title = (isset($title)) ? " - ".$title : "";
$_scripts = (isset($_scripts)) ? $_scripts : "";
$_styles = (isset($_styles)) ? $_styles : "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <title>User Management <?php print $title ?></title>

<?php echo $_scripts ?>
    
    	<script src="<?php echo base_url(); ?>resors/js/menu.js" type="text/javascript"></script>
    	<script src="<?php echo base_url(); ?>resors/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    	<script src="<?php echo base_url(); ?>resors/js/jquery-ui-1.8.21.custom.min.js" type="text/javascript"></script>
    	<script src="<?php echo base_url(); ?>resors/js/common.js" type="text/javascript"></script>
    	
    	<link href="<?php echo base_url(); ?>resors/theme_default/style.css" rel="stylesheet" type="text/css" />
    	<link href="<?php echo base_url(); ?>resors/top_menu.css" type="text/css" rel="stylesheet" />
    	<link href="<?php echo base_url(); ?>resors/main.css" type="text/css" rel="stylesheet" />
    	<link href="<?php echo base_url(); ?>resors/jquery-ui-1.8.21.custom.css" type="text/css" rel="stylesheet" />
<?php echo $_styles ?>
</head>

<body class="page">

<div id="templatemo_wrapper">
	<div id="templatemo_header">	
      <div id="loggeduser_box">
  			<div>
  				  <img src="<?php echo base_url(); ?>resors/theme_default/images/icon_user.png" alt="" width="35" height="35"  align="left" border="0" class="icon"/> 
  				  <div class="user">
  					   <div><?php echo ucfirst($this->session->userdata('user_name'));?></div>
  					   <a href="<?php echo site_url()."/login/logout";?>" >Log Out</a>
  				  </div>
  			</div>
      </div>
  </div>
    
    <div id="templatemo_menu"> 
  		 <div id="navgation">     
           <ul id="menu">                  
                <li>
                   <a href="<?php echo site_url()."/home/"; ?>" title="Home" class="selected">Home</a>
                </li>
                <li>
                  <a href="<?php echo site_url()."/order/"; ?>" title="Marketing">Order</a>
                </li>
                <li>
                  <a href="#" title="supplier">Supplier</a>
                </li>
                <li>
                  <a href="#" title="customer">Customer</a>
                </li>    
                 <li>
                  <a href="#" title="user_account">User Account</a>
                    <ul>
                        <li><a href="<?php echo site_url()."/user/changePassword/"; ?>" title="Change Password">Change Password</a></li>
                        <li><a href="<?php echo site_url()."/user/"; ?>" title="Add User">User</a></li>
                        <li><a href="<?php echo site_url()."/auth_action/"; ?>" title="System Actions">System Action</a></li>
                        <li><a href="<?php echo site_url()."/role/"; ?>" title="Role">User Role</a></li>
                    </ul>           
                 </li>
  		    </div> 
          <div class="clear"></div>    
       </div> 
       <div class="cleaner"></div>
       <div><br>
       <div id="templatemo_middle_subpage">
       </div>
    <div id="templatemo_main">
        <div class="content-wrapper">
      		 <div id="content">
      		  <?php print $content ?>		  
      		 </div>
		    </div> 
        <div class="cleaner"></div>
    </div>       
</div> 
<div id="tfooter_wrapper">
	<div id="tfooter">
    	 <div class="copy">Copyright &copy; <?php echo date("Y") ?> <a href="#">Nasna Impex Garments Industries (Pvt) Ltd.</a> </div>
        <div class="powerd">Powerd by <a href="http://www.erav.lk" target="_parent">eRav Technologies</a></div>
    </div> 
</div> 
</body>
</html>
