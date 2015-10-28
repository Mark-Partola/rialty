<?php namespace Config;

define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASS', '123');
define('DBNAME', '_rielty');


define('DRIVER', 'mysql');
define('CHARSET', 'cp1251');


class DatabaseConnect{

	private static $instance;

	private function __construct(){}
	private function __clone(){}
	private function __wakeup(){}

	public static function connect() {

		if(!is_object(self::$instance)) {

			$dsn = DRIVER.':host='.HOST.';dbname='.DBNAME;

			try {
				self::$instance = new \PDO($dsn, USER, PASS);
				self::$instance->exec("SET NAMES " . CHARSET);
				self::$instance->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
			} catch (\PDOException $e) {
				die($e->getMessage());
			}

		}

		return self::$instance;
	}
}