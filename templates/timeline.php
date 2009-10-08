<div class="timeline">
	<table width="100%">
		<tr>
			<?php for($x=date('Y')-6;$x<=date('Y')+6;$x++) { ?>
				<td><?= $x ?></td>
			<?php }?>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<?php for($x=1;$x<=12;$x++) { ?>
				<td><?= $x ?></td>
			<?php }?>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<?php for($x=1;$x<=31;$x++) { ?>
				<td><?= $x ?></td>
			<?php }?>
		</tr>
	</table>
</div>