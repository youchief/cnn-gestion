<div class="members view">
<h2><?php echo h($member['Member']['titre']." ".$member['Member']['nom']." ".$member['Member']['nom']);?></h2>
	<dl>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($member['Member']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($member['Member']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($member['Member']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adresse'); ?></dt>
		<dd>
			<?php echo h($member['Member']['adresse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npa'); ?></dt>
		<dd>
			<?php echo h($member['Member']['npa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ville'); ?></dt>
		<dd>
			<?php echo h($member['Member']['ville']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date De Naissance'); ?></dt>
		<dd>
			<?php echo h($member['Member']['date_de_naissance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Private Phone'); ?></dt>
		<dd>
			<?php echo h($member['Member']['private_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pro Phone'); ?></dt>
		<dd>
			<?php echo h($member['Member']['pro_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Phone'); ?></dt>
		<dd>
			<?php echo h($member['Member']['mobile_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($member['Member']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexe'); ?></dt>
		<dd>
			<?php echo h($member['Member']['sexe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entree Club'); ?></dt>
		<dd>
			<?php echo h($member['Member']['entree_club']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo h($member['Member']['section']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mbre Tri'); ?></dt>
		<dd>
			<?php echo h($member['Member']['mbre_tri']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categorie'); ?></dt>
		<dd>
			<?php echo h($member['Member']['categorie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Groupe'); ?></dt>
		<dd>
			<?php echo h($member['Member']['groupe']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Liste'), array('action' => 'index')); ?> </li>
	</ul>
</div>
