<?php include($include_root.'templates/header.php'); ?>
<div class="numbers">
	<div class="box spot1"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot2"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot3"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box small"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot4"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot5"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot6"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box small"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot7"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot8"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot9"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box small"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot10"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot11"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot12"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box small"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot13"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot14"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box small"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot15"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot16"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box small"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot17"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot18"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box small"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot19"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
	<div class="box spot20"><img src="images/numbers_bg.png" width="100%" height="100%" /></div>
</div>


	<?php  /*<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post"> */ ?>
	<input type="text" name="year" value="<?= sprintf("%012d",date('Y')) ?>" size="15" maxlength="15" id="year" />	
	<input type="text" name="month" value="<?= sprintf("%02d", date('m')); ?>" id="month" size="2" maxlength="2" />
	<input type="text" name="day" value="<?= sprintf("%02d", date('d')); ?>" id="day" size="2" maxlength="2" />
	<input type="text" name="hour" value="<?= sprintf("%02d", date('h')); ?>" size="2" maxlength="2" id="hour" />
	<input type="text" name="minute" value="<?= sprintf("%02d", date('i')); ?>" size="2" maxlength="2" id="minute" />
	<input type="submit" name="search" value="Search" id="search" />
	<br /><input type="radio" name="adbc" value="bc" id="adbc"> BC <input type="radio" name="adbc" value="ad" id="adbc"> AD 
	<div id="search_result"></div>
	<?php /*</form>*/ ?>
	
	<?php 
		foreach($categories as $k => $v) {
			echo '<a href="#" id="'.$k.'" class="random">'.$v->title.'</a><br />';
		}
	?>
	<div id="random_result"></div>

<?php include($include_root.'templates/footer.php'); ?>