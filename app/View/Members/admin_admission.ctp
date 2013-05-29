<div class="members index">
        <h2><?php echo __('Admission des membres'); ?></h2>
        <table cellpadding="0" cellspacing="0" class="table">
                <tr>
                        <th><?php echo $this->Paginator->sort('titre'); ?></th>
                        <th><?php echo $this->Paginator->sort('prenom'); ?></th>
                        <th><?php echo $this->Paginator->sort('nom'); ?></th>
                        <th><?php echo $this->Paginator->sort('adresse'); ?></th>
                        <th><?php echo $this->Paginator->sort('npa'); ?></th>
                        <th><?php echo $this->Paginator->sort('ville'); ?></th>
                        <th><?php echo $this->Paginator->sort('sexe'); ?></th>
                        <th><?php echo $this->Paginator->sort('entree_club'); ?></th>
                        <th><?php echo $this->Paginator->sort('section'); ?></th>
                        <th><?php echo $this->Paginator->sort('adm/demission'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($members as $member): ?>
                        <tr>
                                <td><?php echo h($member['Member']['titre']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['prenom']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['nom']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['adresse']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['npa']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['ville']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['sexe']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['entree_club']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['section']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['adm/demission']); ?>&nbsp;</td>
                                <td class="actions">
                                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id'])); ?>
                                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id'])); ?>
                                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?>
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

<?php echo $this->Html->link(__('Valider'), array('action' => 'validateAdmission'), array('class' => 'btn btn-success'), __('Etes vous sur de valider les admissions ?')); ?>
