<a href="/admin/news/add">Добавить</a><br>
<?php 
// debug($data);
foreach ($data as $item) : ?>
	<?php foreach($item['titleTranslation'] as $title): ?>
		<?= $title['locale'] .': '. $title['content']; ?><br>
	<?php endforeach; ?>
	<?=$item['News']['title']?> <a href="/admin/news/edit/<?=$item['News']['id']?>?lang=ru">Редактировать ru</a>
	 <a href="/admin/news/edit/<?=$item['News']['id']?>?lang=kz">Редактировать kz</a><br><br><br>
<?php endforeach; ?>