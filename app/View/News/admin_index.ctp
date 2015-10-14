<a href="/admin/news/add">Добавить</a><br>
<?php 
foreach ($data as $item) : ?>

	<?=$item['News']['title']?> <a href="/admin/news/edit/<?=$item['News']['id']?>">Редактировать</a><br>

<?php endforeach; ?>