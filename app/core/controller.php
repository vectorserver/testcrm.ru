<?php
class Controller {

	public $model;
	public $view;
	public $user;
	public static $db;

	function __construct()
	{
        self::$db =  Ddb::init();
        $this->user = new User();
        $this->view = new View();

	}

	public static function db(){
	    return self::$db;
    }

	// действие  по умолчанию
	public function action_index()
	{
		// todo
	}


}
