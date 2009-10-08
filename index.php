<?php
	session_start('itd');
	//date_default_timezone_set('Israel');
	include('common.php');
	if(isset($_COOKIE['itd_id'])) {
		$me = $user->my_info($_COOKIE['itd_user'],$_COOKIE['itd_id']);
	}		
	if(isset($_GET['search'])) {
		if(strtolower($_POST['adbc']) == "bc") { $neg = '-'; }
		if($_POST['hour'] <= 11 && strtolower($_POST['ampm']) == "pm") { $_POST['hour']+=12; }
		$year = str_replace(',','',$_POST['year']);
		$year+= 0;
		$year = $neg.$year;
		$time = mktime($_POST['hour'],$_POST['minute'],0,$_POST['month'],$_POST['day'],$year);
		$available = $moment->is_available($time,$time);
		include($include_root.'templates/search_result_ajax.php');
	} elseif(isset($_GET['purchase'])) {
		// build the day
		$day_start = mktime(0,0,0,date('m',$_GET['purchase']),date('d',$_GET['purchase']),date('Y',$_GET['purchase']));
		$day_end = mktime(23,59,59,date('m',$_GET['purchase']),date('d',$_GET['purchase']),date('Y',$_GET['purchase']));
		// build the week
		
		// build the month 
		
		// build the year
		//$year_available = $moment->in_range(substr($_GET['purchase'],0,4).'0101000000',substr($_GET['purchase'],0,4).'1231235959');
		$day_available = $moment->in_range($day_start,$day_end);	
		include($include_root.'templates/purchase.php');		
	} elseif(isset($_GET['random'])) {
		if(isset($_POST['category'])) {
			$event = $random->event($_POST['category']);
			echo $event->title.' - '.date('n/j/Y',$event->stamp).' <a href="?purchase='.$event->stamp.'">Purchase</a>';
			echo '<p class="random" id="'.$_POST['category'].'">Try Again</a></p>';
		}
	} elseif(isset($_GET['add'])) {
		$start = $_GET['add'];
		if(isset($_GET['end'])) { $end = $_GET['end']; } else { $end = $_GET['add']; }
		if(is_numeric($_GET['add'])) { $cart->add($start,$end); } else { echo 'no'; }
		header('Location: index.php?cart');
	} elseif(isset($_GET['remove'])) {
		$cart->remove($_GET['remove']);
		header('Location: index.php?cart');
	} elseif(isset($_GET['timeline'])) {
		include($include_root.'templates/timeline.php');
	} elseif(isset($_GET['cart'])) {
		include($include_root.'templates/cart.php');
	} elseif(isset($_GET['checkout'])) {
		include($include_root.'templates/checkout.php');
	} elseif(isset($_GET['register'])) {
		if($_POST['submit']) {
			$errors = $error->account($_POST['data']);
			if(count($errors) > 0) {
				$message = implode('<br />',$errors);
				include($include_root.'templates/register.php');
			} else {
				$user_id = $user->create($_POST['data']);
				$user->login($_POST['data']);
				$me = $user->my_info($_POST['data']['username'],$user_id);
				header('Location: '.$web_root.'?account');
			}
		} else {
			include($include_root.'templates/register.php');
		}
	} elseif(isset($_GET['account'])) {
		include($include_root.'templates/account.php');
	} elseif(isset($_GET['login'])) {
		if($_POST['submit']) {
			$errors = $error->check_login($_POST['data']['username'],$_POST['data']['password']);
			if(count($errors) > 0) {	
				$message = "Your username or password is invalid";
				include($include_root.'templates/login.php');
			} else {
				$user->login($_POST['data']);
				header('Location: '.$web_root.'?account');
			}
		} else {
			include($include_root.'templates/login.php');
		}
	} elseif(isset($_GET['logout'])) {
		$user->logout();
		header('Location: index.php');
	} else {
		include($include_root.'templates/home.php');
	}
?>	