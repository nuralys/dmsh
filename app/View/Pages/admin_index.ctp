<?php 

// debug($pages);

foreach ($pages as $page) : ?>

	<?=$page['Page']['title']?> <a href="/admin/pages/edit/<?=$page['Page']['id']?>">Редактировать</a><br>

<?php endforeach; ?>