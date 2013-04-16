<?php  $this->layout = 'public';?>
<div class="contacts_form">
<?php echo $this->Form->create('Contact');?>
	<fieldset>
	<?php
		echo $this->Form->input('section_id', array('empty' => '--select--'));
		echo $this->Form->input('prenom');
		echo $this->Form->input('nom');
		echo $this->Form->input('email');
		echo $this->Form->input('telephone');
		echo $this->Form->input('sujet');
		echo $this->Form->input('message');
		echo $this->Recaptcha->show(array(
				'theme' => 'white',
				'lang' => 'fr',
			));
	
	  	echo $this->Recaptcha->error();
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>