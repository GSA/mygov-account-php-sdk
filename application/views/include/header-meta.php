<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta content="text/html; charset=utf8" http-equiv="Content-Type">
<title>MyGov App Example</title>

<?php if(strlen(config_item('app_url')) > 0): ?>
<base href="<?php echo config_item('app_url')?>" />
<?php endif;?>

<link type="image/x-icon" href="./assets/img/mygov.ico" rel="shortcut icon">
<link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<link type="text/css" href="./assets/css/style.css" rel="stylesheet">

<link media="print" type="text/css" href="./assets/css/print.css" rel="stylesheet">
<!--[if IE 7]><link rel="stylesheet" href="./static-dev/benefits/en/css/ie7.css" type="text/css" /><![endif]-->

<script type="text/javascript" async="" src="https://www.google-analytics.com/ga.js"></script>
<script src="./assets/jquery.min.js" type="text/javascript"></script>



<body>




		
		<ul>
			<?php if(empty($user['email'])) { ?>
			<li id="last-child"><a href="./login?origin=<?php echo current_url(); ?>" id="last-child" class="login_button">MyGov Login</a></li>
			<?php } else { ?>
				
				<li id="last-child"><a href="#"><?php echo $user['first_name'] . ' ' . $user['last_name']; ?></a></li>
				<li id="last-child"><a href="./logout" id="last-child" class="login_button">Log Out</a></li>
				
			<?php }?>
		</ul>		
		


  
