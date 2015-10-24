<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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

		echo $this->Html->css(array('reset', 'style', 'slide', 'jquery.fancybox.css?v=2.1.5'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script(array('jquery-2.1.4', 'jquery.fancybox.pack.js?v=2.1.5', 'app','ckeditor/ckeditor.js'));
	?>
</head>
<body>
	<header>
		<div class="header">
			<div class="cr">
				<div class="top_head rel">
					<div class="logo_top_text">
						<div class="logo">
							<a href="">
								<img src="/img/logo.png" alt=""/>
							</a>
						</div>
						<div class="top_text">
							<div class="top_text_title">Музыкальная школа №2 Астана</div>
							<div class="top_text_des">
								<p>
									Lorem Ipsum is simply dummy text of the 
printing and typesetting industry
								</p>
							</div>
						</div>
					</div>
					<div class="top_phone">
						<span>Адрес: г. Астана</span>
						<span>ул. Ш. Айманова, 8</span>
						<span>тел: +7 (7172) 20 06 23</span>
<div class="yaz">
						<ul>
							<li><a href="/kz">Каз</a></li>
							<li><a href="/">Рус</a></li>
						</ul></div>
					</div>

				</div>
				<section class="tops" id="tops">
					<section class="slider" >
						<div class="slider__item">
							<img src="/img/slider1.jpg" alt="фортепиано - dmsh2astana.kz"></div>
						<div class="slider__item">
							<img src="/img/slider2.jpg" alt="казахские народные инструменты - dmsh2astana.kz"></div>
						<div class="slider__item">
							<img src="/img/slider3.jpg" alt="русские народные инструменты - dmsh2astana.kz"></div>
					</section>
					<div class="slider_bg"></div>
				</section>
				<div class="menu_container">
					<ul class="menu">
						<li class="active">
							<a href="/<?=$lang?>"><?php echo __('Главная'); ?></a>
						</li>
						<li>
							<a ><?php echo __('О школе'); ?></a>
							<div class="nav_sb">
								<ul class="frame">
									<li>
										<a href="/<?=$lang?>pages/istoriya_shkoly"><?php echo __('История школы'); ?></a>
									</li>
									<li>
										<a href="/<?=$lang?>pages/rukovodstvo"><?php echo __('Руководство'); ?></a>
									</li>
									<li>
										<a href="/<?=$lang?>pages/struktura_shkoly"><?php echo __('Структура школы'); ?></a>
									</li>
									<li>
										<a href="/<?=$lang?>pages/pedagogicheskiy_sovet"><?php echo __('Педагогический совет'); ?></a>
									</li>
								</ul>
							</div>
						</li>
						<li> 
							<a ><?php echo __('Образование'); ?></a>
							<div class="nav_sb">
								<ul class="frame">
									<li>
										<a href="/<?=$lang?>pages/plan_raboty"><?php echo __('План работы'); ?></a>
									</li>
									<li>
										<a href="/<?=$lang?>pages/dokumenty"><?php echo __('Документы'); ?></a>
									</li>
									<li>
										<a href="/<?=$lang?>pages/polozhenie_konkursov"><?php echo __('Положения конкурсов'); ?></a>
									</li>
									<li>
										<a href="/<?=$lang?>pages/tvorcheskie_kollektivy"><?php echo __('Творческие коллективы'); ?></a>
									</li>
									<li>
										<a href="/<?=$lang?>pages/platnye_obrazovatelnye_uslugi"><?php echo __('Платные образовательные услуги'); ?></a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="/<?=$lang?>pages/dostizheniya"><?php echo __('Достижения'); ?></a>
						</li>
						<li>
							<a href="http://dmsh.loc/<?=$lang?>gallery"><?php echo __('Фотогалерея'); ?></a>
						</li>
						<li>
							<a href="/<?=$lang?>pages/kontakty"><?php echo __('Контакты'); ?></a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</header>
	<div class="container">
		<div class="cr">
			<div class="content">
				
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content') ?>
			</div>
			<div class="side_bar_container">
				<div class="sider_bar_title">Новости/События</div>
				<div class="side_bar">
					<ul>
					
					<?php foreach($news as $news_item): ?>
						<li>
							<a href="/<?=$lang?>news/view/<?=$news_item['News']['id']?>">
								<?=$news_item['News']['title']?>
							</a>
						</li>
					<?php endforeach; ?>
				</div>
				<div class="form">
					<div class="form_title">Обратная связь</div>
					<form action="">
						<input type="text" placeholder="Ваше имя" class="form_input"/>
						<input type="text" placeholder="Ваше e-mail" class="form_input"/>
						<textarea name="" id="" cols="30" placeholder="Текст сообщения..."rows="10"class="form_textarea"></textarea>
						<button class="form_button">Отправить</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="cr">
			<div class="footer_container">
				<div class="footer_des">
					<p>© 2015 Все права защищены</p>
					<p>Разработано в Астана Креатив</p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>