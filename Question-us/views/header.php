
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		 <meta name="keywords" content="" />
		 <meta name="description" content="" />
		 <title>Ask Question</title>
		<?php //echo $_scripts ?>
    
    	
    	<!--<script src="<?php echo base_url(); ?>resors/js/jquery.min.js" type="text/javascript"></script>
    	<script src="<?php echo base_url(); ?>resors/js/jQuery.Validate.min.js" type="text/javascript"></script>-->
    	

 		 <script src="<?php echo base_url() ?>resors/js/jquery-1.9.1.js" type="text/javascript"></script>
 		 <script src="<?php echo base_url() ?>resors/js/jquery-ui.js" type="text/javascript"></script>
 		 <!--<link href="<?php echo base_url(); ?>resors/css/jquery-ui.css" rel="stylesheet" type="text/css" />-->
    	
    	<link href="<?php echo base_url(); ?>resors/theme_default/style.css" rel="stylesheet" type="text/css" />
    	<link href="<?php echo base_url(); ?>resors/main.css" type="text/css" rel="stylesheet" />
    	<link href="<?php echo base_url(); ?>resors/main-style.css" type="text/css" rel="stylesheet" />

		<?php //echo $_styles ?>

	</head>
	<body>
		<div id="nav-headedr">
			<div id="navgation">
				<div class="user">
  					  <div class="join">
  					  		<a class="reg"href="<?php echo site_url()."/register/"; ?>">Join Now</a>
  					  		<?php if (!$this->session->userdata('logged_in')): ?>
  					  			<a href="<?php echo site_url()."/login/"; ?>">Log In</a>
				  			<?php else: ?>
				  		<nav>
				  			<ul>
						  		<li>
			  					   	<a href="#">
			  					   	<?php echo ucfirst($this->session->userdata('username'));?>
			  					   	</a>
			  					   	<ul >
			  					   	<li>
			  					   		<a href="<?php echo site_url()."/login/logout";?>" >Log Out</a>
			  					   	</li>
		  					  		<?php endif ?>
		  					  	</ul>
		  					  	</li>
  					  		</ul>
  					  	</nav>
  					  </div>
  				  </div>
				<ul id="trans-nav">
					<li>
	                   <a href="<?php echo site_url()."/home/"; ?>" class="selected">Home</a>
	                </li>
	                <li>
	                	<a href="<?php echo site_url()."/question_list/"; ?>">Questions</a>
	                </li>
	                <li>
	                	<a href="<?php echo site_url()."/member_list/"; ?>">Members</a>
	                </li>
	                  <li>
	                	<a href="<?php echo site_url()."/search/"; ?>">Search</a>
	                </li> 
				</ul> 
			</div>
		</div>
		<div id="logowigt"><a href="<?php echo site_url()."/home/"; ?>">
			<img id="logo" src="<?php echo base_url(); ?>resors/images/logo.png"></a>
		</div>
			<div id="templatemo_wrapper">