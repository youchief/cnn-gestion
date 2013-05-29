<div class="forms view">
        <h2><?php echo h($form['Form']['name']); ?> 
                <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link(__('Edit Form'), array('action' => 'edit', $form['Form']['id'])); ?> </li>
                                <li><?php echo $this->Form->postLink(__('Delete Form'), array('action' => 'delete', $form['Form']['id']), null, __('Are you sure you want to delete # %s?', $form['Form']['id'])); ?> </li>
                                <li><?php echo $this->Html->link(__('New Field'), array('controller' => 'fields', 'action' => 'admin_add_form_field', $form['Form']['id'])); ?> </li>
                                <li><?php echo $this->Html->link(__('Get Public Link'), array('action' => 'get_public_link', $form['Form']['id'])); ?> </li>
                                <li><?php echo $this->Html->link(__('List Subscriptions'), array('controller' => 'subscriptions', 'action' => 'index_by_form', $form['Form']['id'])); ?> </li>
                        </ul>
                </div>
        </h2>
        <h3><?php echo h($form['Form']['sub_title']); ?> </h3>
        <dl>
                <dt><?php echo __('Contact Email'); ?></dt>
                <dd>
                        <?php echo h($form['Form']['contact_email']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Notify'); ?></dt>
                <dd>
                        <?php echo h($form['Form']['notify']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Captcha'); ?></dt>
                <dd>
                        <?php echo h($form['Form']['captcha']); ?>
                        &nbsp;
                </dd>
        </dl>
        <div class="related">
                <h3><?php echo __('Related Fields'); ?></h3>
                <?php if (!empty($form['Field'])): ?>
                        <table cellpadding="0" cellspacing="0"  class="table table-striped">
                                <tr>
                                        <th><?php echo __('Label'); ?></th>
                                        <th><?php echo __('Help Text'); ?></th>
                                        <th><?php echo __('Type'); ?></th>
                                        <th><?php echo __('Require'); ?></th>
                                        <th><?php echo __('Class'); ?></th>
                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                                <?php
                                $i = 0;
                                foreach ($form['Field'] as $field):
                                        ?>
                                        <tr>
                                                <td><?php echo $field['label']; ?></td>
                                                <td><?php echo $field['help_text']; ?></td>
                                                <td><?php echo $field['type']; ?></td>
                                                <td><?php echo $field['require']; ?></td>
                                                <td><?php echo $field['class']; ?></td>
                                                
                                                <td class="actions">
                                                        <div class="btn-group">
                                                                <?php echo $this->Html->link(__('↑'), array('controller' => 'fields', 'action' => 'moveUp', $field['id']), array('class' => 'btn')); ?>
                                                                <?php echo $this->Html->link(__('↓'), array('controller' => 'fields', 'action' => 'moveDown', $field['id']), array('class' => 'btn')); ?>
                                                                <?php echo $this->Html->link(__('View'), array('controller' => 'fields', 'action' => 'view', $field['id']), array('class' => 'btn')); ?>
                                                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'fields', 'action' => 'edit', $field['id']), array('class' => 'btn')); ?>
                                                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fields', 'action' => 'delete', $field['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $field['id'])); ?>
                                                        </div>
                                                </td>


                                        </tr>
                                <?php endforeach; ?>
                        </table>
                <?php endif; ?>
        </div>
</div>