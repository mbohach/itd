<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>ITD</title>
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="<?= $web_root ?>css/css.css" type="text/css" />
	<link type='text/css' href='<?= $web_root ?>css/basic.css' rel='stylesheet' media='screen' />
	<!-- IE 6 "fixes" -->
	<!--[if lt IE 7]>
	<link type='text/css' href='<?= $web_root ?>css/basic_ie.css' rel='stylesheet' media='screen' />
	<![endif]-->
	<script type="text/javascript" src="<?= $web_root ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?= $web_root ?>js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="<?= $web_root ?>js/jquery.maskedinput-1.2.2.min.js"></script>
	<script type="text/javascript" src="<?= $web_root ?>js/jquery.corner.js" /></script>
	<script type="text/javascript" src="<?= $web_root ?>js/jquery.simplemodal-1.3.min.js"></script>
	<script type="text/javascript" src="<?= $web_root ?>js/application.js"></script>
</head>

<body class="<?= $body_class ?>">
	<div id="container">
		<div id="timedate">
			<span>Location:</span> <?= $user_details['Response']['_c']['City']['_v'] ?> &nbsp; &nbsp; &nbsp; &nbsp; <span>Date:</span> <?= date('M d, Y') ?> &nbsp; &nbsp; &nbsp; &nbsp; <span>Time</span> <?= date('h:i:s')?>
		</div>
		<div id="logo">
			<a href="<?= $web_root ?>"><img src="<?= $web_root ?>images/logo.png" alt="Internation Time Database" border="0" /></a>
		</div>
		
		<div class="transparent" style="margin-bottom: 25px;">
			<div class="padding">
				<div id="top_nav">
					<ul>
						<li><a href="<?= $web_root ?>?register">Create New</li>
						<li><a href="<?= $web_root ?>?account">My Account</a></li>
						<li><a href="#">Most Recent</a></li>
						<li><a href="#">Demo</a></li>
						<li><a href="#">About</a></li>
						<li class="last"><a href="#">Gifts</a></li>
						<li class="search"><input type="text" name="search" value="search purchased time" class="search_box" /></li>
					</ul>
				</div>
			</div>
		</div>
		
		