<?php 
	echo $this->Html->css('subscription');
?>
<div class="select_form">
<?php echo $this->Form->create('Subscription');?>
	<fieldset>
		<legend><?php echo __('Select'); ?></legend>
	<?php
		echo $this->Form->input('form_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
