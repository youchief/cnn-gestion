<script>
function cUpper(cObj) 
{
cObj.value=cObj.value.toUpperCase();
}
</script>

<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
		<legend><?php echo __('Admin Add Member'); ?></legend>
	<?php
		echo $this->Form->input('titre', array('type'=>'select', 'options'=>array('' => '-', 'M.'=>'M.', 'Mme'=>'Mme', 'Mlle'=>'Mlle')));
		echo $this->Form->input('prenom');
		echo $this->Form->input('nom', array('onKeyUp' => 'cUpper(this)'));
		echo $this->Form->input('adresse');
		echo $this->Form->input('npa');
		echo $this->Form->input('ville',array('onKeyUp' => 'cUpper(this)'));
		echo $this->Form->input('profession');
		echo $this->Form->input('date_de_naissance', array(
	    	'dateFormat' => 'DMY',
   		 	'minYear' => date('Y') - 100,
   	 		'maxYear' => date('Y') - 1,
		));
		echo $this->Form->input('private_phone');
		echo $this->Form->input('pro_phone');
		echo $this->Form->input('mobile_phone');
		echo $this->Form->input('email');
		echo $this->Form->input('email_2');
		echo $this->Form->input('email_3');
		echo $this->Form->input('sexe' , array('type'=>'select', 'options'=>array('' => '-','F'=>'F', 'H'=>'H')));
		echo $this->Form->input('entree_club', array('dateFormat' => 'DMY'));
		echo $this->Form->input('section_id');
		echo $this->Form->input('mbre_tri');
		echo $this->Form->input('categorie');
		echo $this->Form->input('groupe', array('type'=>'select', 'options'=>array('' => '-','ES'=>'ES', 'JU'=>'JU', 'EL'=>'EL' , 'M'=>'M', 'ENAT' => 'ENAT', 'ADOS' =>'ADOS')));
		echo $this->Form->input('ct', array('type'=>'select', 'options'=>array('' => '-','Nat'=>'Nat', 'Tri'=>'Tri', 'Wp'=>'Wp')));
		echo $this->Form->input('adm/demission', array('type'=>'select', 'options'=>array('' => '-','Y'=>'Y', 'Z'=>'Z'), 'default'=>'Y'));
		echo $this->Form->input('arbitre', array('type'=>'select', 'options'=>array('' => '-','Nat'=>'Nat', 'Tri'=>'Tri', 'Wp'=>'Wp')));
		echo $this->Form->input('licence');
		echo $this->Form->input('status', array('type'=>'select', 'options'=>array('' => '-','A'=>'A', 'H'=>'H', 'J'=>'J', 'P'=>'P', 'MON'=>'MON', 'PR'=>'PR')));
		echo $this->Form->input('comite');
		echo $this->Form->input('ancien_comite');
		echo $this->Form->input('en_conge');
		echo $this->Form->input('moniteur');
		echo $this->Form->input('entraineur');
		echo $this->Form->input('en_test');
		echo $this->Form->input('delai', array('dateFormat' => 'DMY', 'empty'=>'--select--', 'label'=>'Sans cotisation jusqu\'au'));	
		echo $this->Form->input('avs');
		echo $this->Form->input('sss');
		echo $this->Form->input('js');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index'));?></li>
	</ul>
</div>