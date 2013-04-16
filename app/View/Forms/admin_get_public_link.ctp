<h1><?php echo __("Public link for")." ".$form['Form']['name']?></h1>

<h2><?php echo __("Copy paste this for a popup subscription")?></h2>
<p class="code">
	<?php echo h('<A HREF="');?>
	<?php echo FULL_BASE_URL.$this->webroot.'subscriptions/subscription/'.$form['Form']['id'].'"';?>
	<?php echo h('onClick="return popup(this,');?>
	<?php echo h("'inscription'");?>
	<?php echo h(')">');?>
	<?php echo h($form['Form']['name']."</a>");?>
</p>


<h2><?php echo __("Copy paste this for a new page subscription")?></h2>
<p class="code">
	<?php echo h("<a href='".FULL_BASE_URL.$this->webroot.'subscriptions/subscription/'.$form['Form']['id']."' TARGET='_blank'>{$form['Form']['name']}</a>")?>
</p>