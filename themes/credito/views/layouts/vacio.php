<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="es" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!--Ionicons--> 
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />

        
        <?php
            $baseUrl = Yii::app()->baseUrl;
            $cs = Yii::app()->getClientScript();
            $cs->registerCssFile($baseUrl . '/themes/credito/dist/css/AdminLTE.css');
            Yii::app()->clientScript->registerCoreScript('jquery');
            Yii::app()->getClientScript()->registerCoreScript( 'jquery.ui' );
        ?>
        <style>
            body{
                background: transparent;
            }
            .content-wrapper, .right-side{
                margin: 0px !important;
            }
        </style>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body>
        <div class="wrapper" id="page">
        <section class="content-wrapper" style="">
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
            <section class="row">
                <?php echo $content; ?>
            </section>
        </section>
        </div>
    </body>
</html>