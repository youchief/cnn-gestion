<div class="members index">
	<h2><?php echo __('Passer les Juniors en Adulte');?></h2>
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
			<th>Titre</th>
			<th>Prénom</th>
			<th>Nom</th>
			<th>Date de naissance</th>
			<th>Status</th>
			<th>Adresse</th>
			<th>NPA</th>
			<th>Ville</th>
			<th>Sexe</th>
			<th>Entrée au club</th>
			<th>Section</th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($members as $member): ?>
	<tr>
		<td><?php echo h($member['Member']['titre']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['prenom']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['nom']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['date_de_naissance']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['status']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['npa']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['ville']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['sexe']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['entree_club']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['section']); ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>

		<?php echo $this->Html->link(__('Passer de J vers A'), array('action' => 'admin_validateJtoA'), array('class'=>'btn btn-success'), __('Etes vous sur de vouloir passer les juniors vers adultes ?')); ?>
