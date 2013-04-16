<?php
	$this->layout = 'xls';
?>

<table cellpadding="0" cellspacing="0">
	<tr>
		<td><b><?php echo __('Subscriptions for')." : ".$subscriptions[0]['Form']['name'];?><b></td>
	</tr>
	<tr>
		<td><b>Date:</b></td>
		<td><?php echo date("F j, Y, g:i a"); ?></td>
	</tr>
	<tr>
		<td><b>Inscriptions:</b></td>
		<td style="text-align:left"><?php echo count($subscriptions);?></td>
	</tr>

	<tr>
		<?php 
			foreach ($subscriptions[0]['Entry'] as $entry): ?>
			<th><?php echo h($entry['key']); ?>&nbsp;</th>
		<?php endforeach; ?>
	</tr>
	<?php foreach ($subscriptions as $entry): ?>
		<tr>
		<?php foreach ($entry['Entry'] as $value): ?>				
			<td><?php echo h($value['value']); ?>&nbsp;</td>
		<?php endforeach; ?>
	</tr>
	<?php endforeach; ?>
</table>