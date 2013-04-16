<div class="forms form">
<?php echo $this->Form->create('Form');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Form'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('contact_email');
		echo $this->Form->input('notify');
		echo $this->Form->input('captcha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Form.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Form.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Forms'), array('action' => 'index'));?></li>
	</ul>
</div>
