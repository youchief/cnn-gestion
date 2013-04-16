<div class="subscriptions index">
        <h2><?php echo __('Subscriptions for') . " : " . $subscriptions[0]['Form']['name']; ?></h2>
        <?php //debug($subscriptions);?>
        <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        Actions
                        <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link(__('List Forms'), array('controller' => 'forms', 'action' => 'index')); ?> </li>
                        <li><?php echo $this->Html->link(__('Export XLS'), array('controller' => 'subscriptions', 'action' => 'export', $subscriptions[0]['Subscription']['form_id'])); ?> </li>
                         <li><?php echo $this->Html->link(__('Effacer les inscriptions'), array('controller' => 'subscriptions', 'action' => 'delete_all', $subscriptions[0]['Subscription']['form_id'])); ?> </li>
                </ul>
        </div>
        <table cellpadding="0" cellspacing="0"  class="table table-striped">
                <tr>
                        <?php foreach ($subscriptions[0]['Entry'] as $entry): ?>
                                <th><?php echo h($entry['key']); ?>&nbsp;</th>
                        <?php endforeach; ?>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($subscriptions as $entry): ?>
                        <tr>
                                <?php foreach ($entry['Entry'] as $value): ?>				
                                        <td><?php echo h($value['value']); ?>&nbsp;</td>
                                <?php endforeach; ?>
                                <td class="actions">
                                        <div class="btn-group">
                                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $entry['Subscription']['id']), array('class' => 'btn')); ?>
                                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $entry['Subscription']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $entry['Subscription']['id'])); ?>
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
