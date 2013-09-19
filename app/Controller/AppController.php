<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

        public $components = array('Auth', 'Session');
        public $member_actions = array('members/admin_view', 'members/admin_index', 'members/admin_search', 'members/admin_export',
            'sections/admin_index', 'sections/admin_view', 'sections/admin_export', 'forms/admin_index',  'forms/admin_view', 'subscriptions/admin_index_by_form', 'subscriptions/admin_export');

        public function beforeFilter() {
                $this->Auth->authenticate = array('Form');
                $this->Auth->authorize = array('Controller');
                $this->Auth->allow('getOptions', 'subscription', 'login', 'logout', 'display', 'contact', 'thanks', 'select');
                $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login', 'admin' => true);
                $this->Auth->loginRedirect = array('controller' => 'members', 'action' => 'index', 'admin' => true);
        }

        public function beforeRender() {
                if ($this->Auth->user('group_id') == 1) {
                        $this->set('menu', 'menu_admin');
                } else if ($this->Auth->user('group_id') == 2) {
                        $this->set('menu', 'menu_members');
                }else  {
                        $this->set('menu', 'menu');
                }
        }

        public function isAuthorized($user = null) {
                if ($this->Auth->user('group_id') == 1) {
                        return true;
                } else if ($this->Auth->user('group_id') == 2) {
                        return in_array($this->params['controller'] . '/' . $this->params['action'], $this->member_actions);
                }
                return false;
        }

}
