<div class="notifications form">
<?php echo $this->Form->create('Notification');?>
	<fieldset>
		<legend><?php echo __('Admin Add Notification'); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('section_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Notifications'), array('action' => 'index'));?></li>
	</ul>
</div>
