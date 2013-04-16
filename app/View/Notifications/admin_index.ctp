<div class="notifications index">
        <h2><?php echo __('Notifications'); ?> 
        <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link(__('New Notification'), array('action' => 'add')); ?></li>
                        </ul>
                </div>
        </h2>
        <table cellpadding="0" cellspacing="0"  class="table table-striped">
                <tr>
                        <th><?php echo $this->Paginator->sort('email'); ?></th>
                        <th><?php echo $this->Paginator->sort('section_id'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($notifications as $notification): ?>
                        <tr>
                                <td><?php echo h($notification['Notification']['email']); ?>&nbsp;</td>
                                <td>
                                        <?php echo $this->Html->link($notification['Section']['nom'], array('controller' => 'sections', 'action' => 'view', $notification['Section']['id'])); ?>
                                </td>

                                <td>
                                        <div class="btn-group">
                                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $notification['Notification']['id']), array('class' => 'btn')); ?>
                                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $notification['Notification']['id']), array('class' => 'btn')); ?>
                                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $notification['Notification']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $notification['Notification']['id'])); ?>
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