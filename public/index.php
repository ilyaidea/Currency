<?php
/**
 * * Summary File ${NAME}
 *
 * Description File ${NAME}
 *
 * @author Faeze Eshaghi
 * Date: 2/4/2019
 * Time: 6:34 PM
 * @version 1.0.0
 */

date_default_timezone_set("Asia/Tehran");

// ** Define Path constants
define('BASE_PATH', dirname(__DIR__).'/');
define('APP_PATH', BASE_PATH. 'app/');
define('MODULES_PATH', APP_PATH.'Modules/');
define( 'PROJECT_NAME', basename( BASE_PATH ) );

require_once APP_PATH. 'Bootstrap.php';

$bootstrap = new \App\Bootstrap();
$bootstrap->run();
