admin index
<a href="/admin/gallery/add">Добавить фото</a><br>
<?php foreach ($data as $v) :?>
<?=$v['Gallery']['title'] ?><br>
<?=$v['Gallery']['img'] ?>
<?php endforeach; ?>