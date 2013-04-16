<div class="fields form">
<?php echo $this->Form->create('Field');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Field'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('label');
		echo $this->Form->input('help_text');
		echo $this->Form->input('type', array('type'=>'select', 'options'=>array('text'=>'text', 'date' =>'date', 'time'=>'time', 'select'=>'select', 'checkbox'=>'checkbox')));
		echo $this->Form->input('options', array('after'=>__('For select and multiple choice only ! Separate with choices with "," ')));
		echo $this->Form->input('require');
		echo $this->Form->input('form_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Field.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Field.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Fields'), array('action' => 'index'));?></li>
	</ul>
</div>
