<?php 
foreach ($data as $item) : ?>

	<a href="/news/view/<?=$item['News']['id']?>"><?=$item['News']['title']?></a>
	<img src="/img/news/thumbs/<?=$item['News']['img']?>">
	<a href="/admin/news/edit/<?=$item['News']['id']?>"><br>

<?php endforeach; ?>