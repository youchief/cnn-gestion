<div class="fields view">
<h2><?php  echo __('Field');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($field['Field']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Label'); ?></dt>
		<dd>
			<?php echo h($field['Field']['label']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Help Text'); ?></dt>
		<dd>
			<?php echo h($field['Field']['help_text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($field['Field']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Require'); ?></dt>
		<dd>
			<?php echo h($field['Field']['require']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class'); ?></dt>
		<dd>
			<?php echo h($field['Field']['class']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form'); ?></dt>
		<dd>
			<?php echo $this->Html->link($field['Form']['name'], array('controller' => 'forms', 'action' => 'view', $field['Form']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Field'), array('action' => 'edit', $field['Field']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Field'), array('action' => 'delete', $field['Field']['id']), null, __('Are you sure you want to delete # %s?', $field['Field']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fields'), array('action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Options');?></h3>
	<?php if (!empty($field['Option'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th><?php echo __('Field Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($field['Option'] as $option): ?>
		<tr>
			<td><?php echo $option['id'];?></td>
			<td><?php echo $option['value'];?></td>
			<td><?php echo $option['field_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'options', 'action' => 'view', $option['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'options', 'action' => 'edit', $option['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'options', 'action' => 'delete', $option['id']), null, __('Are you sure you want to delete # %s?', $option['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Option'), array('controller' => 'options', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
