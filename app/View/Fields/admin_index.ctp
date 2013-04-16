<div class="fields index">
	<h2><?php echo __('Fields');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('label');?></th>
			<th><?php echo $this->Paginator->sort('help_text');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('require');?></th>
			<th><?php echo $this->Paginator->sort('class');?></th>
			<th><?php echo $this->Paginator->sort('form_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($fields as $field): ?>
	<tr>
		<td><?php echo h($field['Field']['id']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['label']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['help_text']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['type']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['require']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['class']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($field['Form']['name'], array('controller' => 'forms', 'action' => 'view', $field['Form']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $field['Field']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $field['Field']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $field['Field']['id']), null, __('Are you sure you want to delete # %s?', $field['Field']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Field'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Forms'), array('controller' => 'forms', 'action' => 'index')); ?> </li>
	</ul>
</div>
