<?php

App::uses('AppModel', 'Model');

/**
 * Entry Model
 *
 * @property Subscription $Subscription
 */
class Entry extends AppModel {

        /**
         * Display field
         *
         * @var string
         */
        public $displayField = 'key';

        /**
         * Validation rules
         *
         * @var array
         */
        public $validate = array(
            'key' => array(
                'notempty' => array(
                    'rule' => array('notempty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
            'value' => array(
                'notempty' => array(
                    'rule' => array('notempty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
            'subscription_id' => array(
                'numeric' => array(
                    'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
        );

        //The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * belongsTo associations
         *
         * @var array
         */
        public $belongsTo = array(
            'Subscription' => array(
                'className' => 'Subscription',
                'foreignKey' => 'subscription_id',
                'conditions' => '',
                'fields' => '',
                'order' => ''
            )
        );

}
