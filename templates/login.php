<?php include($include_root.'templates/header.php'); ?>
<div class="transparent" style="margin-bottom: 25px;">
	<div class="padding">
		<div id="main_content">
			<div class="padding">
				<h1>Login</h1>
				<? $helper->display_message($message,'errors'); ?>
				<form action="<?= $web_root ?>?login" method="post">
					<p><label>Username</label><?= $helper->text('username','',$action) ?></p>
					<p><label>Password</label><?= $helper->text('password','',$action,true) ?></p>
					<p><input type="submit" name="submit" value="Log In &raquo;" /></p>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include($include_root.'templates/footer.php'); ?>