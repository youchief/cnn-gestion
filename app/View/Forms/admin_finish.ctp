<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Add field'), array('controller' => 'fields', 'action' => 'add_form_field', $form_id)); ?></li>
		<li><?php echo $this->Html->link(__('Finish'), array('action' => 'index')); ?> </li>
	</ul>
</div>