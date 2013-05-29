<script>
        function cUpper(cObj) 
        {
                cObj.value=cObj.value.toUpperCase();
        }
</script>
<div class="members form">
        <?php echo $this->Form->create('Member'); ?>
        <fieldset>
                <legend><?php echo __('Admin Edit Member'); ?></legend>
                <?php
                echo $this->Form->input('titre', array('type' => 'select', 'options' => array('' => '-', 'M.' => 'M.', 'Mme' => 'Mme', 'Mlle' => 'Mlle')));
                echo $this->Form->input('prenom');
                echo $this->Form->input('nom', array('onKeyUp' => 'cUpper(this)'));
                echo $this->Form->input('adresse');
                echo $this->Form->input('npa');
                echo $this->Form->input('ville', array('onKeyUp' => 'cUpper(this)'));
                echo $this->Form->input('profession');
                echo $this->Form->input('date_de_naissance', array(
                    'dateFormat' => 'DMY',
                    'minYear' => date('Y') - 100,
                    'maxYear' => date('Y') - 1,
                ));
                echo $this->Form->input('private_phone');
                echo $this->Form->input('pro_phone');
                echo $this->Form->input('mobile_phone');
                echo $this->Form->input('email');
                echo $this->Form->input('email_2');
                echo $this->Form->input('email_3');
                echo $this->Form->input('sexe', array('type' => 'select', 'options' => array('' => '-', 'F' => 'F', 'H' => 'H')));
                echo $this->Form->input('entree_club', array('dateFormat' => 'DMY'));
                echo $this->Form->input('section_id');
                echo $this->Form->input('groupe', array('type'=>'select', 'options'=>array('' => '-','TRI-Adulte'=>'TRI-Adulte', 'TRI-Ecole'=>'TRI-Ecole', 'WP-Equ1'=>'WP-Equ1' , 'WP-Equ2'=>'WP-Equ2', 'WP-U20' => 'WP-U20', 'WP-U17' =>'WP-U17', 'WP-U15' =>'WP-U15', 'WP-Ecole' =>'WP-Ecole', 'WP-EquFille' =>'WP-EquFille', 'NAT-Kids1' =>'NAT-Kids1', 'NAT-Kids2' =>'NAT-Kids2', 'NAT-Futura' =>'NAT-Futura', 'NAT-C1' =>'NAT-C1', 'NAT-C2' =>'NAT-C2', 'NAT-C3' =>'NAT-C3', 'NAT-Master' =>'NAT-Master')));
                echo $this->Form->input('niveau_natation', array('type' => 'select', 'options' => array('' => '-', 'Evolution' => 'Evolution', 'Intermédiaire' => 'Intermédiaire', 'Performance' => 'Performance', 'Golden League' => 'Golden League')));
                echo $this->Form->input('ct', array('type' => 'select', 'options' => array('' => '-', 'Nat' => 'Nat', 'Tri' => 'Tri', 'Wp' => 'Wp')));
                echo $this->Form->input('adm_demission', array('type' => 'select', 'options' => array('' => '-', 'Y' => 'Y', 'Z' => 'Z')));
                echo $this->Form->input('arbitre', array('type' => 'select', 'options' => array('' => '-', 'Nat' => 'Nat', 'Tri' => 'Tri', 'Wp' => 'Wp')));
                echo $this->Form->input('licence');
                echo $this->Form->input('status', array('type' => 'select', 'options' => array('' => '-', 'A' => 'A', 'H' => 'H', 'J' => 'J', 'P' => 'P', 'MON' => 'MON', 'PR' => 'PR')));
                echo $this->Form->input('comite');
                echo $this->Form->input('ancien_comite');
                echo $this->Form->input('en_conge');
                echo $this->Form->input('moniteur');
                echo $this->Form->input('entraineur');
                echo $this->Form->input('en_test');
                echo $this->Form->input('delai', array('dateFormat' => 'DMY', 'empty' => '--select--', 'label' => 'Sans cotisation jusqu\'au'));
                echo $this->Form->input('avs');
                echo $this->Form->input('sss');
                echo $this->Form->input('js');
                echo $this->Form->input('comment', array('label' => 'Commentaires'));
                ?>
        </fieldset>
        <?php echo $this->Form->end(__('Submit')); ?>
</div>