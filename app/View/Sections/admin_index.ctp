<div class="sections index">
        <h2><?php echo __('Sections'); ?></h2>
        <table cellpadding="0" cellspacing="0"  class="table table-striped">
                <tr>
                        <th><?php echo $this->Paginator->sort('nom'); ?></th>
                        <th><?php echo $this->Paginator->sort('nom_court'); ?></th>
                        <th><?php echo $this->Paginator->sort('email'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($sections as $section): ?>
                        <tr>
                                <td><?php echo h($section['Section']['nom']); ?>&nbsp;</td>
                                <td><?php echo h($section['Section']['nom_court']); ?>&nbsp;</td>
                                <td><?php echo h($section['Section']['email']); ?>&nbsp;</td>
                                <td>
                                        <div class="btn-group">
                                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $section['Section']['id']), array('class' => 'btn')); ?>
                                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $section['Section']['id']), array('class' => 'btn')); ?>
                                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $section['Section']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $section['Section']['id'])); ?>
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