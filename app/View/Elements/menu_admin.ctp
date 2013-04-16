<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="">CNN</a>
    <ul class="nav">
      <li><?php echo $this->Html->link(__('Membres'), array('controller' => 'members','action' => 'index', 'admin'=>true));?></li>
      <li><?php echo $this->Html->link(__('Sections'), array('controller' => 'sections','action' => 'index', 'admin'=>true));?></li>
      <li><?php echo $this->Html->link(__('Notifications'), array('controller' => 'notifications','action' => 'index', 'admin'=>true));?></li>
      <li><?php echo $this->Html->link(__('Utilisateurs'), array('controller' => 'users','action' => 'index', 'admin'=>true));?></li>
      <li><?php echo $this->Html->link(__('Formulaires'), array('controller' => 'forms','action' => 'index', 'admin'=>true));?></li>
      <li><?php echo $this->Html->link(__('Notifications'), array('controller' => 'notifications','action' => 'index', 'admin'=>true));?></li>
      <li><?php echo $this->Html->link(__('Contacts'), array('controller' => 'contacts', 'action' => 'index', 'admin'=>true));?></li>
      <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action'=>'logout', 'admin'=>false));?></li>
    </ul>
  </div>
</div>