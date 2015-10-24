<?php 
	echo $this->Form->create('Gallery', array('type' => 'file'));
	echo $this->Form->input('title', array('label' => 'Название:'));
	echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	echo $this->Form->end('Редактировать');
 ?>