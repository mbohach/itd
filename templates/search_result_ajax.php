<?php if($available) { ?>
	<a href="?purchase=<?= $time ?>"><img src="<?= $web_root ?>images/buy_now.png" border="0" /></a>
<?php } else { ?>
	Your moment in time is no longer available. Search again!
<?php } ?>