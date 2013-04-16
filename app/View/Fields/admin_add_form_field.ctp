<div class="fields">
<?php echo $this->Form->create('Field');?>
	<fieldset>
		<legend><?php echo __('Admin Add Field'); ?></legend>
	<?php
		echo $this->Form->input('label');
		echo $this->Form->input('help_text');
		echo $this->Form->input('type', array('type'=>'select', 'options'=>array('text'=>'text', 'date' =>'date', 'time'=>'time', 'select'=>'select', 'multiple'=>'multiple', 'checkbox'=>'checkbox', 'legend'=>'legend')));
		echo $this->Form->input('options', array('after'=>__('For select and multiple choice only ! Separate with choices with "," ')));
		echo $this->Form->input('require');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
