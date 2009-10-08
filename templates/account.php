<?php include($include_root.'templates/header.php'); ?>
<div class="transparent" style="margin-bottom: 25px;">
	<div class="padding">
		<div id="main_content">
			<div class="padding">
				<h1>My Account</h1>
				<? $helper->display_message($message,'message'); ?>
				<pre><?php print_r($me); ?></pre>
			</div>
		</div>
	</div>
</div>
<?php include($include_root.'templates/footer.php'); ?>