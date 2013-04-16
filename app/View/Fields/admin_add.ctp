<div class="fields form">
<?php echo $this->Form->create('Field');?>
	<fieldset>
		<legend><?php echo __('Admin Add Field'); ?></legend>
	<?php
		echo $this->Form->input('label');
		echo $this->Form->input('help_text');
		echo $this->Form->input('type', array('type'=>'select', 'options'=>array('text'=>'text', 'date' =>'date', 'time'=>'time', 'select'=>'select', 'checkbox'=>'checkbox')));
		echo $this->Form->input('options', array('after'=>__('For select and multiple choice only ! Separate with choices with "," ')));
		echo $this->Form->input('require');
		echo $this->Form->input('class', array('type'=>'select', 'options'=>array('input'=>'input', 'required' =>'required')));
		echo $this->Form->input('form_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fields'), array('action' => 'index'));?></li>
	</ul>
</div>
