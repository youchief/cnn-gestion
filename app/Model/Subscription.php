<?php

App::uses('AppModel', 'Model');

/**
 * Subscription Model
 *
 * @property Form $Form
 * @property Entry $Entry
 */
class Subscription extends AppModel {

        /**
         * Display field
         *
         * @var string
         */
        public $displayField = 'created';

        /**
         * Validation rules
         *
         * @var array
         */
        public $validate = array(
            'form_id' => array(
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
            'Form' => array(
                'className' => 'Form',
                'foreignKey' => 'form_id',
                'conditions' => '',
                'fields' => '',
                'order' => ''
            )
        );

        /**
         * hasMany associations
         *
         * @var array
         */
        public $hasMany = array(
            'Entry' => array(
                'className' => 'Entry',
                'foreignKey' => 'subscription_id',
                'dependent' => true,
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'exclusive' => '',
                'finderQuery' => '',
                'counterQuery' => ''
            )
        );

}
