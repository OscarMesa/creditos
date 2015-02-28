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
        $cs->registerCssFile($baseUrl . '/themes/credito/dist/css/AdminLTE.css');
        $cs->registerCssFile($baseUrl . '/themes/credito/plugins/daterangepicker/daterangepicker-bs3.css');
        $cs->registerCssFile($baseUrl . '/themes/credito/plugins/jvectormap/jquery-jvectormap-1.2.2.css');
        $cs->registerCssFile($baseUrl . '/themes/credito/plugins/morris/morris.css');
        $cs->registerCssFile($baseUrl . '/themes/credito/plugins/iCheck/flat/_all.css');
?>
         
    <?php
//        $cs->registerScriptFile('http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
//        $cs->registerScriptFile('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js');
//        $cs->registerScriptFile('http://localhost/creditos/assets/965a76f7/jquery.yiiactiveform.js',CClientScript::POS_END);
//        $cs->registerScriptFile('http://localhost/creditos/assets/75c3461e/gridview/jquery.yiigridview.js',CClientScript::POS_END);
        $cs->registerScript("notConflit",""
                . "jQuery.noConflict();"
                );
        
        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/sparkline/jquery.sparkline.min.js');
        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');
        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');
        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/daterangepicker/daterangepicker.js');
        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/datepicker/bootstrap-datepicker.js');
        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/iCheck/icheck.min.js');
        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/slimScroll/jquery.slimscroll.min.js');
        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/chartjs/Chart.min.js');
        $cs->registerScriptFile($baseUrl . '/themes/credito/dist/js/pages/dashboard.js');
        $cs->registerScriptFile($baseUrl . '/themes/credito/dist/js/pages/dashboard2.js');
        $cs->registerScriptFile($baseUrl . '/themes/credito/dist/js/demo.js');
        
        
        ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->




        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body class="skin-purple">

        <div class="wrapper" id="page">
                <?php $this->widget('UserMenu'); ?>
<section class="content-wrapper" style="min-height: 884px;">
            <section class="content-header">
                    <h1><?php echo $this->titlePage; ?></h1>
                    <?php if (isset($this->breadcrumbs)): ?>
                        <?php
                        if (Yii::app()->controller->route !== 'site/index')
                            $this->breadcrumbs = array_merge(array(Yii::t('zii', 'Home') => Yii::app()->createUrl(Yii::app()->homeUrl)), $this->breadcrumbs);

                        $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links' => $this->breadcrumbs,
                            'homeLink' => false,
                            'tagName' => 'ol',
                            'separator' => '',
                            'activeLinkTemplate' => '<li><a href="{url}"><i class="fa fa-dashboard"></i>{label}</a></li>',
                    'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
                            'htmlOptions' => array('class' => 'breadcrumb')
                        ));
                        ?><!-- breadcrumbs -->
                <?php endif ?>
            </section>
    <section class="content">
    <section class="row">
<?php echo $content; ?>
</section>
</section>

                <div id="footer">

                </div><!-- footer -->
<?php echo Yii::app()->user->ui->displayErrorConsole(); ?>
            </section>
        </div><!-- page -->
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>   
     <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/themes/credito/dist/js/jquery.yiiactiveform.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/themes/credito/dist/js/jquery.ba-bbq.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/themes/credito/dist/js/jquery.cookie.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/themes/credito/dist/js/jquery.treeview.js"></script>
        <script type="text/javascript" src="/creditos/assets/75c3461e/gridview/jquery.yiigridview.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/themes/credito/dist/js/app.js"></script>  
        <script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/themes/credito/plugins/iCheck/icheck.min.js"></script>
        
        
        
    </body>
</html>
