<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $attachments = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary', 'autoIncrement' => true,
		),
		'filename' => array('type' => 'text', 'null' => false, 'length' => 255),
		'filesize' => array('type' => 'integer', 'null' => false, 'length' => 11),
		'mimetype' => array('type' => 'text', 'null' => false, 'length' => 255),
		'name' => array('type' => 'text', 'null' => false, 'length' => 255),
		'dir' => array('type' => 'text', 'null' => false, 'length' => 255),
		'created' => array('type' => 'integer', 'null' => false),
		'modified' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => true)
		),
		'tableParameters' => array()
	);

}
