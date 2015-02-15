<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('MYSQL_HOST') or define('localhost',true);
defined('MYSQL_USER') or define('postgres',true);
defined('MYSQL_PASS') or define('creditos',true);
defined('MYSQL_DB') or define('',true);
defined('MYSQL_PORT') or define('5432',true);
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
