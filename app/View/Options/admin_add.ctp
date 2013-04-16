<div class="options form">
<?php echo $this->Form->create('Option');?>
	<fieldset>
		<legend><?php echo __('Admin Add Option'); ?></legend>
	<?php
		echo $this->Form->input('value');
		echo $this->Form->input('field_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Options'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Fields'), array('controller' => 'fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field'), array('controller' => 'fields', 'action' => 'add')); ?> </li>
	</ul>
</div>
