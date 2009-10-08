<?php include($include_root.'templates/header.php'); ?>
<div class="transparent" style="margin-bottom: 25px;">
	<div class="padding">
		<div id="main_content">
			<div class="padding">
				<h1>Purchase Options</h1>
				<h4><?= date('n/j/Y g:ia',$_GET['purchase']); ?></h4>
				<p><a href="?add=<?= $_GET['purchase'] ?>">Add only this moment to my cart</a></p>
				<?php if($year_available) { ?><p><a href="#">Purchase Entire Year</a></p><?php } ?>
				<?php if($day_available) { ?><p><a href="?add=<?= $day_start ?>&end=<?= $day_end ?>">Purchase Entire Day</a></p><?php } ?>
			</div>
		</div>
	</div>
</div>
<?php include($include_root.'templates/footer.php'); ?>