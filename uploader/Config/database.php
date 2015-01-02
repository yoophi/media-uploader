<?php
define('DEFAULT_DB', APP.DS.'db.sqlite3');
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Sqlite',
		'persistent' => false,
		'database' => DEFAULT_DB,
		//'encoding' => 'utf8'
	);
}
