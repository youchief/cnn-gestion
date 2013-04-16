<div class="members index">
	<h2><?php echo __('Members');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>titre</th>
			<th>prenom</th>
			<th>nom</th>
			<th>date_de_naissance</th>
			<th>status</th>
			<th>adresse</th>
			<th>npa</th>
			<th>ville</th>
			<th>sexe</th>
			<th>entree_club</th>
			<th>section</th>
			<th>mbre_tri</th>
			<th>categorie</th>
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
		<td><?php echo h($member['Member']['mbre_tri']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['categorie']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<?php echo $this->Html->link(__('Passer de J vers A'), array('action' => 'admin_validateJtoA'), null, __('Etes vous sur de vouloir passer les juniors vers adultes ?')); ?>
	</ul>
</div>
