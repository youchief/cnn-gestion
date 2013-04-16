<?php
/**
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
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <?php echo $this->Html->charset(); ?>
                <title>
                        CNN - Cercle des Nageurs de Nyon
                </title>
                <?php
                echo $this->Html->meta('icon');

                echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', 'bootstrap'));
                echo $this->Html->css(array('bootstrap', 'bootstrap-responsive', 'subscription'));
                echo $this->Html->css('form');
                echo $this->fetch('meta');
                echo $this->fetch('css');
                echo $this->fetch('script');
                ?>
        </head>
        <body>
                <div class="navbar">
                        <div class="navbar-inner">
                                <a class="brand" href="#"><?php echo $this->Html->image('logo.png')?> - Centre des Nageurs de Nyon</a>

                        </div>
                </div>
                <div id="container" class="subscription-content">

                        <div id="content" class="container">

                                <?php echo $this->Session->flash(); ?>
                                <?php echo $this->fetch('content'); ?>
                        </div>

                </div>
                <?php echo $this->element('sql_dump'); ?>
        </body>
</html>
