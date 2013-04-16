<div class="spectacles form">
<?php echo $this->Form->create('Member', array('type' => 'file'));?>
	<fieldset>
		<legend><?php echo __('Add CSV File'); ?></legend>

	<?php
		echo $this->Form->input('file', array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
