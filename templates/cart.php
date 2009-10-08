<?php include($include_root.'templates/header.php'); ?>
<div class="transparent" style="margin-bottom: 25px;">
	<div class="padding">
		<div id="main_content">
			<div class="padding">
				<h1>Items You're Purchasing</h1>
				<div id="cart">
					<?php foreach($_SESSION['item'] as $k=>$v) { ?>
						<?php if($v['stamp_start'] != $v['stamp_end']) { ?>
							<p><?= date('n/j/Y g:ia',$v['stamp_start']) ?> ----> <?= date('n/j/Y g:ia',$v['stamp_end']) ?> <a href="?cart&remove=<?= $k ?>">Remove</a></p>
						<?php } else { ?>
							<p><?= date('n/j/Y g:ia',$v['stamp_start']) ?> <a href="?cart&remove=<?= $k ?>">Remove</a></p>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include($include_root.'templates/footer.php'); ?>