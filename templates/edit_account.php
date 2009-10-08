<?php include($include_root.'templates/header.php'); ?>
<div class="transparent" style="margin-bottom: 25px;">
	<div class="padding">
		<div id="main_content">
			<div class="padding">
				<h1>Edit Account</h1>
				<form action="<?= $web_root ?>?edit_account" method="post">
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
				<p><label>Password</label><?= $helper->text('password','',$action,true); ?> <small>Leave blank if you do not wish to update your password</small></p>
				<p><label>Confirm Password</label><?= $helper->text('confirm_password','',$action,true); ?></p>
				<p><label>Time Zone</label><?= $helper->doSelect('time_zone',$zonelist,true,'')?></p>
				<p><input type="submit" name="submit" value="Update Account &raquo;" /> | <a href="<?= $web_root ?>?account">Cancel</a></p>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include($include_root.'templates/footer.php'); ?>