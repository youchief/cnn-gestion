<div class="contacts form">
<?php echo $this->Form->create('Contact');?>
	<fieldset>
		<legend><?php echo __('Admin Add Contact'); ?></legend>
	<?php
		echo $this->Form->input('prenom');
		echo $this->Form->input('nom');
		echo $this->Form->input('email');
		echo $this->Form->input('telephone');
		echo $this->Form->input('sujet');
		echo $this->Form->input('message');
		echo $this->Form->input('sections_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index'));?></li>
	</ul>
</div>
