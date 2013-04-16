<div class="members index">
	<h2><?php echo __('Members');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('titre');?></th>
			<th><?php echo $this->Paginator->sort('nom');?></th>
			<th><?php echo $this->Paginator->sort('prenom');?></th>
			<th><?php echo $this->Paginator->sort('section');?></th>
			<th><?php echo $this->Paginator->sort('categorie');?></th>
			<th><?php echo $this->Paginator->sort('groupe');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($members as $member): ?>
	<tr>
		<td><?php echo h($member['Member']['titre']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['nom']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['prenom']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['section']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['categorie']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['groupe']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<?php echo  $this->element('search'); ?>
</div>
