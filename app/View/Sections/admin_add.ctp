<div class="sections form">
<?php echo $this->Form->create('Section');?>
	<fieldset>
		<legend><?php echo __('Admin Add Section'); ?></legend>
	<?php
		echo $this->Form->input('nom');
		echo $this->Form->input('nom_court');
		echo $this->Form->input('comprend_des_membres');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index'));?></li>
	
	</ul>
</div>
