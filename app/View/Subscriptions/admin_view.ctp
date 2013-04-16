<div class="subscriptions view">
<h2><?php  echo __('Subscription');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subscription['Form']['name'], array('controller' => 'forms', 'action' => 'view', $subscription['Form']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
	<div class="related">
	<h3><?php echo __('Related Entries');?></h3>
	<?php if (!empty($subscription['Entry'])):?>
	<table cellpadding="0" cellspacing="0"  class="table table-striped">
	<tr>
		<th><?php echo __('Key'); ?></th>
		<th><?php echo __('Value'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subscription['Entry'] as $entry): ?>
		<tr>
			<td><?php echo $entry['key'];?></td>
			<td><?php echo $entry['value'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete Subscription'), array('action' => 'delete', $subscription['Subscription']['id']), null, __('Are you sure you want to delete # %s?', $subscription['Subscription']['id'])); ?> </li>
	</ul>
	
</div>
