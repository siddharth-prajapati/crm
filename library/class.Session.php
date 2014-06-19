<?php
class Session
{
	private $loader;
	private $page;
	private $module;
    private $type;


	public function __construct ()
	{
		global $loader;
		$this->loader = $loader;
		$this->menu = $menu;
		$this->page = $page;
		$this->module = $module;
        $this->type = $type;
        $this->level = $level;
	}
	
	public static function user()
	{
		if(isset($_SESSION['user']) and $_SESSION['user']!= '')
		{ 
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public static function put($key='',$value)
	{
		if(stristr($key,"."))
		{
			$sub = explode(".",$key);
			$_SESSION[$sub[0]][$sub[1]]=$value;
		}
		else
		{
			$_SESSION[$key]=$value;
		}
	}
	
	public static function get($key='',$value)
	{
		if(stristr($key,"."))
		{
			$sub = explode(".",$key);
			return $_SESSION[$sub[0]][$sub[1]];
		}
		else
		{
			return $_SESSION[$key];
		}
	}
	
	public static function kill()
	{
		unset($_SESSION);
		session_destroy();
	}


}