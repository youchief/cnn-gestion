<div class="members index">
        <h2><?php echo __('Members'); ?> 
                <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link(__('Ajouter Membre'), array('action' => 'add')); ?></li>
                                <li><?php echo $this->Html->link(__('Exporter'), array('action' => 'export')); ?></li>
                                <li><?php echo $this->Html->link(__('Junior vers Adulte'), array('action' => 'jtoa')); ?></li>
                                <li><?php echo $this->Html->link(__('Admission'), array('action' => 'admission')); ?></li>
                                <li><?php echo $this->Html->link(__('Démission'), array('action' => 'demission')); ?></li>
                        </ul>
                </div>
        </h2>
        <?php echo $this->element('search'); ?>
        <table cellpadding="0" cellspacing="0"  class="table table-striped">
                <tr>
                        <th><?php echo $this->Paginator->sort('titre'); ?></th>
                        <th><?php echo $this->Paginator->sort('nom'); ?></th>
                        <th><?php echo $this->Paginator->sort('prenom'); ?></th>
                        <th><?php echo $this->Paginator->sort('adresse'); ?></th>
                        <th><?php echo $this->Paginator->sort('npa'); ?></th>
                        <th><?php echo $this->Paginator->sort('ville'); ?></th>
                        <th><?php echo $this->Paginator->sort('email'); ?></th>
                        <th><?php echo $this->Paginator->sort('sexe'); ?></th>
                        <th><?php echo $this->Paginator->sort('section'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($members as $member): ?>
                        <tr>
                                <td><?php echo h($member['Member']['titre']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['nom']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['prenom']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['adresse']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['npa']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['ville']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['email']); ?>&nbsp;</td>
                                <td><?php echo h($member['Member']['sexe']); ?>&nbsp;</td>
                                <td><?php echo h($member['Section']['nom_court']); ?>&nbsp;</td>
                                <td>
                                        <div class="btn-group">
                                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id']), array('class' => 'btn')); ?>
                                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id']), array('class' => 'btn')); ?>
                                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?>
                                        </div>
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

        <div class="pagination">
                <ul>
                        <?php
                        echo '<li>' . $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')) . '</li>';
                        echo '<li>' . $this->Paginator->numbers(array('separator' => '')) . '</li>';
                        echo '<li>' . $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')) . '</li>';
                        ?>
                </ul>
        </div>
</div>