<?php
session_start();
//date('Y:m:d h:i:s', time());
/*
 * Minimal bootstrap file; 
 * acts like a router; 
 * loads the requested file;
 */

$module = 'admin';

/* 
 * Load config.app;
 * Main configuration file
 */
require_once 'config/config.app.php';

/*
 * Load functions library
 */
require_once 'library/functions.php';

/* 
 * Load class.Menu.php;
 * Menu generator class
 */
require_once 'library/class.Menu.php';
require_once 'library/class.Session.php';
require_once 'library/class.Query.php';
/* 
 * Load config.colors;
 * Skins configuration file
 */
require_once 'config/config.colors.php';

/* 
 * Load config.menus;
 * Generate Sidebar Menu
 */
require_once 'config/config.menus.php';

/* 
 * Load config.scripts;
 * Dynamically load JavaScript files in the header and footer
 */
require_once 'config/config.scripts.php';

if(isset($_POST['loginbtn']))
{
	
	$check = Query::getRow("select * from users where email = '".$_POST['lgn']."' and password = '".md5($_POST['pwd'])."'");
	
	if($check != '')
	{
		Session::put('user.id',$check->id);
		Session::put('user.fname',$check->fname);
		Session::put('user.lname',$check->lname);
		Session::put('user.name',$check->email);
		Session::put('user.role',$check->role);
		$_GET['page'] = 'index';
	}
}

if($_GET['page'] == 'logout')
{
	Session::kill();
	$_GET['page'] = 'login';
}

 if(!Session::user())
{
	$_GET['page'] = 'login';
}
/*
 * Requested page;
 * Index by default
 */
$page = isset($_GET['page']) ? $_GET['page'] : 'index';
$section = isset($_GET['section']) ? $_GET['section'] : 'index';

/* Load header */
if($_GET['page'] == 'client')
{
	require_once 'pages/'.$_GET['page'].'/header.php';
}
else
{
require_once 'header.php';
}

/*
 * Load page;
 */
require_once 'pages/' . $page . '.php';

/* Load footer */
require_once 'footer.php';