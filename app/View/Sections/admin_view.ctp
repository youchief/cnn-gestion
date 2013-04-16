<div class="sections view">
<h2><?php  echo __('Section')." ".h($section['Section']['nom']); ?> 
<div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link(__('Edit Section'), array('action' => 'edit', $section['Section']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Exporter'), array('action' => 'export', $section['Section']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Section'), array('action' => 'delete', $section['Section']['id']), null, __('Are you sure you want to delete # %s?', $section['Section']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('action' => 'add')); ?> </li>
                        </ul>
                </div>
</h2>
	<dl>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($section['Section']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom Court'); ?></dt>
		<dd>
			<?php echo h($section['Section']['nom_court']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($section['Section']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Membres');?></h3>
	<?php if (!empty($section['Member'])):?>
	<table cellpadding = "0" cellspacing = "0"  class="table table-striped">
	<tr>
		<th><?php echo __('Titre'); ?></th>
		<th><?php echo __('Prenom'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Adresse'); ?></th>
		<th><?php echo __('Npa'); ?></th>
		<th><?php echo __('Ville'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($section['Member'] as $member): ?>
		<tr>
			<td><?php echo $member['titre'];?></td>
			<td><?php echo $member['prenom'];?></td>
			<td><?php echo $member['nom'];?></td>
			<td><?php echo $member['adresse'];?></td>
			<td><?php echo $member['npa'];?></td>
			<td><?php echo $member['ville'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'members', 'action' => 'view', $member['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'members', 'action' => 'edit', $member['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'members', 'action' => 'delete', $member['id']), null, __('Are you sure you want to delete # %s?', $member['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>