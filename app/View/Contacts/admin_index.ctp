<div class="contacts index">
        <h2><?php echo __('Contacts'); ?> </h2>
        <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tr>
                        <th><?php echo $this->Paginator->sort('created'); ?></th>
                        <th><?php echo $this->Paginator->sort('prenom'); ?></th>
                        <th><?php echo $this->Paginator->sort('nom'); ?></th>
                        <th><?php echo $this->Paginator->sort('sujet'); ?></th>
                        <th><?php echo $this->Paginator->sort('section_id'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>


                <?php foreach ($contacts as $contact): ?>
                        <tr>
                                <td><?php echo h($contact['Contact']['created']); ?>&nbsp;</td>
                                <td><?php echo h($contact['Contact']['prenom']); ?>&nbsp;</td>
                                <td><?php echo h($contact['Contact']['nom']); ?>&nbsp;</td>
                                <td><?php echo h($contact['Contact']['sujet']); ?>&nbsp;</td>
                                <td>
                                        <?php echo $this->Html->link($contact['Section']['nom'], array('controller' => 'sections', 'action' => 'view', $contact['Section']['id'])); ?>
                                </td>
                                <td >
                                        <div class="btn-group">
                                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $contact['Contact']['id']), array('class' => 'btn')); ?>
                                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contact['Contact']['id']), array('class' => 'btn')); ?>
                                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contact['Contact']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?>
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