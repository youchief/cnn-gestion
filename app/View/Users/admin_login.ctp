<div class="login">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Entrez votre nom d\'utilisateur et mot de passe'); ?></legend>
    <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login'));?>
</div>