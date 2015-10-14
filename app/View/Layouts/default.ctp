<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout ?>
	</title>
	<?php if(isset($meta['keywords'])): ?>
		<meta name="keywords" content="<?=$meta['keywords']?>">
	<?php endif; ?>
	<?php if(isset($meta['description'])): ?>
		<meta name="description" content="<?=$meta['description']?>">
	<?php endif; ?>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script('ckeditor/ckeditor.js');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<nav><ul>
				<li><a href="/<?=$lang?>"><?php echo __('Главная'); ?></a></li>
				<li><?php echo __('О школе'); ?><ul>
					<li><a href="/<?=$lang?>pages/istoriya_shkoly"><?php echo __('История школы'); ?></a></li>
					<li><a href="/<?=$lang?>pages/rukovodstvo"><?php echo __('Руководство'); ?></a></li>
					<li><a href="/<?=$lang?>pages/struktura_shkoly"><?php echo __('Структура школы'); ?></a></li>
					<li><a href="/<?=$lang?>pages/pedagogicheskiy_sovet"><?php echo __('Педагогический совет'); ?></a></li>
				</ul></li>
				<li><?php echo __('Образование'); ?></li>
				<li><?php echo __('Достижения'); ?></li>
				<li><a href="http://dmsh.loc/<?=$lang?>gallery"><?php echo __('Фотогалерея'); ?></a></li>
				<li><a href="/<?=$lang?>news"><?php echo __('Новости/События'); ?></a></li>
				<li><a href="/">Русский</a></li>
				<li><a href="/kz">Казахский</a></li>
				<li><?php echo __('Контакты'); ?></li>
			</ul></nav>
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">
<?php if(AuthComponent::user()):?>
	<?php echo $this->Html->link('Выход', '/admin/users/logout') ?>
	<?php echo $this->Html->link('Админка', '/admin/') ?>
	<?php echo $this->Html->link('Страницы', '/admin/pages') ?>
	<?php echo $this->Html->link('Фотогалерея', '/admin/gallery') ?>
	<?php echo $this->Html->link('Новости', '/admin/news') ?>
 <?php else:  ?>
	<?php echo $this->Html->link('Вход', '/admin/users/login') ?>
<?php endif; ?>
<hr>
			<?php echo $this->Session->flash('good'); ?>
			<?php echo $this->Session->flash('bad'); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
