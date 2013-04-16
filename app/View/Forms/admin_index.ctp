<div class="forms index">
        <h2><?php echo __('Forms'); ?> 
                <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link(__('New Form'), array('action' => 'add')); ?></li>
                        </ul>
                </div>
        </h2>
        <table cellpadding="0" cellspacing="0"  class="table table-striped">
                <tr>
                        <th><?php echo $this->Paginator->sort('name'); ?></th>
                        <th><?php echo $this->Paginator->sort('contact_email'); ?></th>
                        <th><?php echo $this->Paginator->sort('notify'); ?></th>
                        <th><?php echo $this->Paginator->sort('captcha'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($forms as $form): ?>
                        <tr>
                                <td><?php echo h($form['Form']['name']); ?>&nbsp;</td>
                                <td><?php echo h($form['Form']['contact_email']); ?>&nbsp;</td>
                                <td><?php echo h($form['Form']['notify']); ?>&nbsp;</td>
                                <td><?php echo h($form['Form']['captcha']); ?>&nbsp;</td>

                                <td>
                                        <div class="btn-group">
                                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $form['Form']['id']), array('class' => 'btn')); ?>
                                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $form['Form']['id']), array('class' => 'btn')); ?>
                                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $form['Form']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $form['Form']['id'])); ?>
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