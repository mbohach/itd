<?php include($include_root.'templates/header.php'); ?>
<div class="transparent" style="margin-bottom: 25px;">
	<div class="padding">
		<div id="main_content">
			<div class="padding">
				<h1>Create Account</h1>
				<form action="<?= $web_root ?>?account" method="post">
				<? $helper->display_message($message,'errors'); ?>
				<p><label>First Name</label><?= $helper->text('first_name','',$action); ?></p>
				<p><label>Last Name</label><?= $helper->text('last_name','',$action); ?></p>
				<p><label>Address</label><?= $helper->text('address','',$action); ?></p>
				<p><label>Address 2</label><?= $helper->text('address2','',$action); ?></p>
				<p><label>City</label><?= $helper->text('city','',$action); ?></p>
				<p><label>State</label><?= $helper->text('state','',$action); ?></p>
				<p><label>Zip</label><?= $helper->text('zip','',$action); ?></p>
				<p><label>Country</label><?= $helper->text('country','',$action); ?></p>
				<p><label>Email</label><?= $helper->text('email','',$action); ?></p>
				<p><label>Username</label><?= $helper->text('username','',$action); ?></p>
				<p><label>Password</label><?= $helper->text('password','',$action); ?></p>
				<p><label>Time Zone</label><?= $helper->doSelect('time_zone',$zonelist,'',true)?></p>
				<p><input type="submit" name="submit" value="Create Account &raquo;" /></p>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include($include_root.'templates/footer.php'); ?>