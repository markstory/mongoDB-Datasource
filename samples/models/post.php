<?php

class Post extends AppModel {

	var $useTable = false;
	var $primaryKey = '_id';
	var $_schema = array(
			'_id' => array('type'=>'string', 'length' => 40),
			'title' => array('type'=>'string'),
			'body'=>array('type'=>'string'),
			'hoge'=>array('type'=>'string'),
			);	

}

?>
