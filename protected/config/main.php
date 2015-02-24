<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Creditos',
    'theme' => 'credito',
    'language' => "es",
    'homeUrl' => 'site/index',
    // preloading 'log' component
    'preload' => array(
        'log',
        'bootstrap'
    ),
    'aliases' => array(
        'bootstrap' => 'ext.bootstrap',
    ),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.modules.cruge.components.*',
	'application.modules.cruge.extensions.crugemailer.*',
    ),
    'modules' => array(
        'cruge'=>array(
                'tableprefix'=>'cruge_',

                // para que utilice a protected.modules.cruge.models.auth.CrugeAuthDefault.php
                //
                // en vez de 'default' pon 'authdemo' para que utilice el demo de autenticacion alterna
                // para saber mas lee documentacion de la clase modules/cruge/models/auth/AlternateAuthDemo.php
                //
//                'useCGridViewClass' => 'application.components.CREGridView',
                'buttonStyle' => 'bootstrap',
                'availableAuthMethods'=>array('default'),

                'availableAuthModes'=>array('username','email'),

                // url base para los links de activacion de cuenta de usuario
                'baseUrl'=>'http://localhost/creditos/',

                 // NO OLVIDES PONER EN FALSE TRAS INSTALAR
                 'debug'=>true,
                 'rbacSetupEnabled'=>true,
                 'allowUserAlways'=>true,

                // MIENTRAS INSTALAS..PONLO EN: false
                // lee mas abajo respecto a 'Encriptando las claves'
                //
                'useEncryptedPassword' => false,
            
                'defaultSessionFilter'=>'application.components.MiSesionCruge',

                // Algoritmo de la función hash que deseas usar
                // Los valores admitidos están en: http://www.php.net/manual/en/function.hash-algos.php
                'hash' => 'md5',

                // Estos tres atributos controlan la redirección del usuario. Solo serán son usados si no
                // hay un filtro de sesion definido (el componente MiSesionCruge), es mejor usar un filtro.
                //  lee en la wiki acerca de:
                //   "CONTROL AVANZADO DE SESIONES Y EVENTOS DE AUTENTICACION Y SESION"
                //
                // ejemplo:
                //		'afterLoginUrl'=>array('/site/welcome'),  ( !!! no olvidar el slash inicial / )
                //		'afterLogoutUrl'=>array('/site/page','view'=>'about'),
                //
                'afterLoginUrl'=>null,
                'afterLogoutUrl'=>null,
                'afterSessionExpiredUrl'=>null,

                // manejo del layout con cruge.
                //
                'loginLayout'=>'//layouts/usuarioCrug',
                'registrationLayout'=>'//layouts/usuarioCrug',
                'activateAccountLayout'=>'//layouts/usuarioCrug',
                'resetPasswordLayout'=>'//layouts/usuarioCrug',
                'editProfileLayout'=>'//layouts/main',
                // en la siguiente puedes especificar el valor "ui" o "column2" para que use el layout
                // de fabrica, es basico pero funcional.  si pones otro valor considera que cruge
                // requerirá de un portlet para desplegar un menu con las opciones de administrador.
                //
                'generalUserManagementLayout'=>'ui',

                // permite indicar un array con los nombres de campos personalizados, 
                // incluyendo username y/o email para personalizar la respuesta de una consulta a: 
                // $usuario->getUserDescription(); 
                'userDescriptionFieldsArray'=>array('email'), 

        ),
    // uncomment the following to enable the Gii tool
      'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'admin',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters'=>array('127.0.0.1','::1'),
            'generatorPaths' => array(
                'bootstrap.gii'
            ),
      ),
     
    ),
    // application components
    'components' => array(
        'bootstrap' => array(
            'class' => 'bootstrap.components.Bootstrap',
            'responsiveCss' => true,
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'class' => 'application.modules.cruge.components.CrugeWebUser',
            'loginUrl' => array('/cruge/ui/login'),
        ),
        'authManager' => array(
				'class' => 'application.modules.cruge.components.CrugeAuthManager',
			),
        'crugemailer'=>array(
				'class' => 'application.modules.cruge.components.CrugeMailer',
				'mailfrom' => 'creditos@gmail.com',
				'subjectprefix' => 'Creditos',
				'debug' => true,
			),
        'format' => array(
				'datetimeFormat'=>"d M, Y h:m:s a",
			),
        // uncomment the following to enable URLs in path-format
        /*
         */
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
//               'programa/subirArchivo/<id>' => 'programa/subirArchivo',
//               'programa/ActualizaEstado/<programa>/<estado>' => 'programa/ActualizaEstado'
            ),
            'showScriptName' => false,
            'caseSensitive' => false,
        ),
        /*'db' => array(
            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
        ),*/
        // uncomment the following to use a MySQL database
        
          'db'=>array(
          'connectionString' => 'pgsql:host='.POSTGRES_HOST.';port='.POSTGRES_PORT.';dbname='.POSTGRES_DB,
          'emulatePrepare' => true,
          'username' => POSTGRES_USER,
          'password' => POSTGRES_PASS,
          'charset' => 'utf8',
          ),
         
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),

    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);
