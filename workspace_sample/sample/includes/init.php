<?

define('APP_REAL_PATH', str_replace('includes/init.php', '', str_replace('\\', '/', __FILE__)));
	
require_once(APP_REAL_PATH . "includes/config.php");
require_once(APP_REAL_PATH . "includes/MSSQL.php");
include(APP_REAL_PATH."includes/log4php/Logger.php");
Logger::configure(APP_REAL_PATH.'includes/log4php.config.xml');

require_once(APP_REAL_PATH . "includes/MySmarty.php");

$smarty = new MySmarty();
$db = new MSSQL();

session_start();

if (!isset($_SESSION["is_login"])){	
	$_SESSION["is_login"] = 0;
	$_SESSION["account"] = '';
}

if($_SESSION["is_login"]<=0 || empty($_SESSION["is_login"])){
	$_SESSION["is_login"]=-3;
	if($is_login_page != true) header("location:login.php");
}

?>