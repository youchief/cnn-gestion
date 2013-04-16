<?php
$this->layout = 'subscription';
?>
<div class="subscription">
        <?php echo $this->Form->create('Subscription'); ?>
        <fieldset>
                <h1><?php echo $form['Form']['name'] ?></h1>
                <?php
                foreach ($form['Field'] as $field) {
                        echo "<div class='input_form'>";
                        if ($field['type'] == 'legend') {
                                echo  "<div class='alert alert-error'>". $field['label']."</div>";
                        } else {
                                echo $this->Form->input($field['label'], array('type' => $field['type'],
                                    'label'=>$field['label'],
                                    'multiple' => $field['multiple'],
                                    'options' => $this->requestAction(array('controller' => 'options', 'action' => 'getOptions', $field['id'])),
                                    'required' => $field['require'],
                                    'dateFormat' => 'DMY',
                                    'minYear' => date('Y') - 100,
                                    'div' => $field['class'],
                                    'after' => $field['help_text']));
                                echo "</div>";
                        }
                }

                if ($form['Form']['captcha']) {
                        echo $this->Recaptcha->show(array(
                            'theme' => 'white',
                            'lang' => 'fr',
                        ));

                        echo $this->Recaptcha->error();
                }
                ?>
        </fieldset>
        <?php echo $this->Form->end(__('Submit')); ?>
</div>