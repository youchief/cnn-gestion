<div class="forms form">
        <?php echo $this->Form->create('Form'); ?>
        <fieldset>
                <legend><?php echo __('Admin Add Form'); ?></legend>
                <?php
                echo $this->Form->input('name');
                echo $this->Form->input('sub_title');
                echo $this->Form->input('contact_email');
                echo $this->Form->input('notify');
                echo $this->Form->input('captcha');
                ?>
        </fieldset>
        <?php echo $this->Form->end(__('Submit')); ?>
</div>