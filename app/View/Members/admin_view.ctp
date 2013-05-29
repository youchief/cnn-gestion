<div class="members view">
        <h2><?php echo h($member['Member']['titre']); ?> <?php echo h($member['Member']['nom']); ?> <?php echo h($member['Member']['prenom']); ?>
        <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id'])); ?></li>
                                 <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?></li>
                                
                        </ul>
                </div>
        </h2>
        <dl>
                <dt><?php echo __('Section'); ?></dt>
                <dd>
                        <?php echo h($member['Section']['nom']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Profession'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['profession']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Adresse'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['adresse']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Npa'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['npa']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Ville'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['ville']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Date De Naissance'); ?></dt>
                <dd>
                        <?php echo date('d-m-Y', strtotime($member['Member']['date_de_naissance'])); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Private Phone'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['private_phone']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Pro Phone'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['pro_phone']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Mobile Phone'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['mobile_phone']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Email'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['email']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Email 2'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['email_2']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Email 3'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['email_3']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Sexe'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['sexe']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Entree Club'); ?></dt>
                <dd>
                        <?php echo date('d-m-Y', strtotime($member['Member']['entree_club'])); ?>
                        &nbsp;
                </dd>
                

                <dt><?php echo __('Groupe'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['groupe']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Niveau natation'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['niveau_natation']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Ct'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['ct']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Adm/demission'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['adm_demission']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Arbitre'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['arbitre']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Licence'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['licence']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Status'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['status']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Comite'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['comite']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Ancien Comite'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['ancien_comite']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('En Conge'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['en_conge']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Moniteur'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['moniteur']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Entraineur'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['entraineur']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('En Test'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['en_test']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Sans Cotisation'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['sans_cotisation']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Delai'); ?></dt>
                <dd>
                        <?php echo date('d-m-Y', strtotime($member['Member']['delai'])); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Avs'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['avs']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('SSS'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['sss']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('JS'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['js']); ?>
                        &nbsp;
                </dd>
                <dt><?php echo __('Commentaires'); ?></dt>
                <dd>
                        <?php echo h($member['Member']['comment']); ?>
                        &nbsp;
                </dd>
        </dl>
</div>