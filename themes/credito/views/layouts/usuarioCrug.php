<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="es" />

        <!-- blueprint CSS framework -->

        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!--Ionicons--> 
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />

        <?php
        $baseUrl = Yii::app()->baseUrl;
        $cs = Yii::app()->getClientScript();
//        $cs->registerCssFile($baseUrl . '/themes/credito/dist/css/AdminLTE.min.css');
        $cs->registerCssFile($baseUrl . '/themes/credito/dist/css/AdminLTE2.min.css');
        $cs->registerCssFile($baseUrl . '/themes/credito/plugins/daterangepicker/daterangepicker-bs3.css');
        $cs->registerCssFile($baseUrl . '/themes/credito/plugins/jvectormap/jquery-jvectormap-1.2.2.css');
        $cs->registerCssFile($baseUrl . '/themes/credito/plugins/morris/morris.css');
        $cs->registerCss('loginCss',""
                . "         
            html, body {
                min-height: 100%;
                padding: 0;
                margin: 0;
                font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            }     
            .frame {
                height: 49px;                
                margin: 0;
                padding: 0;
                border-bottom: 1px solid #ddd;
                background-color: white;
            }
            .frame a {
                color: #666;
            }
            .frame a:hover {
                color: #222;
            }
            .frame .buttons a {
                height: 49px;   
                line-height: 49px;                
                display: inline-block;
                text-align: center;
                width: 50px;
                border-left: 1px solid #ddd;
            }
            .frame .brand {
                color: #444;
                font-size: 20px;
                line-height: 49px;
                display: inline-block;
                padding-left: 10px;
            }
            .frame .brand small {
                font-size: 14px;
            }
            a,a:hover {
                text-decoration: none;
            }
            .container-fluid {
                padding: 0;
                margin: 0;
            }
            .text-muted {
                color: #999;
            }
            .ad {
                text-align: center;
                position: fixed;
                bottom: 0;
                left: 0;
                background: #222;
                background: rgba(0,0,0,0.8);
                width: 100%;
                color: #fff;
                display: none;
            }
");

        $cs->registerScriptFile('http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
        $cs->registerScriptFile('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js');

        $cs->registerScriptFile($baseUrl . '/themes/credito/dist/js/app.js', CClientScript::POS_END);
        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/sparkline/jquery.sparkline.min.js', CClientScript::POS_END);
        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', CClientScript::POS_END);
        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/jvectormap/jquery-jvectormap-world-mill-en.js', CClientScript::POS_END);
        ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body class="login-page">
        <header>
            <nav class="frame" role="navigation">
                <div class="container-fluid">
                    <a href="http://almsaeedstudio.com/" class="brand">
                        Aplicación de créditos
                        <small class="text-muted hidden-xs">Una solución</small>
                    </a>
                </div><!-- /.container -->
            </nav><!--/.navbar-->
        </header>   
            <div class="container">
                <div class="row">     
                    <?php /* @var $this Controller */ ?>
                    <?php // $this->beginContent('//layouts/main'); ?>
                    <?php echo $content; ?>
                </div>
            </div>
    </body>
</html>