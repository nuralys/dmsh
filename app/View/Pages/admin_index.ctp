<?php 

// debug($pages);

foreach ($pages as $page) : ?>
<br>
	<?=$page['Page']['title']?> <a href="/admin/pages/edit/<?=$page['Page']['id']?>?lang=ru">Редактировать рус</a> | 
	<a href="/admin/pages/edit/<?=$page['Page']['id']?>?lang=kz">Редактировать каз</a>
	<br>
<?php endforeach; ?>