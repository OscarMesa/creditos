<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<style>
    .item{
        display:block;
        text-align: center;
        padding-left: 15%;
        padding-right: 15%;
    }

    .carousel-caption{
        color:#000;
        position:static;
    }
    .carousel-indicators {
        bottom: 1px;
    }
</style>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active" >
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissable">
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                </div>
            </div><br/><br/><br/>
        </div>
        <div class="item">
            <div class="col-md-12">
                <div class="callout callout-warning">
                    <h4>I am a danger callout!</h4>
                    <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="col-md-12">
                <div class="callout callout-success">
                    <h4>I am a success callout!</h4>
                    <p>This is a green callout.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="col-md-13">
    <div class="box-body">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Bandeja</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Solicitudes</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        Dropdown <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <?php
                            $this->widget('bootstrap.widgets.TbGridView', array(
                                'id' => 'solicitud-prestamo-grid',
                                'dataProvider' => $modelSolicitudPrestamo->search(),
                                'filter' => $modelSolicitudPrestamo,
                                'itemsCssClass' => 'table table-bordered table-hover dataTable',
                                'columns' => array(
                                    'id',
                                    'cliente',
                                    'cantidad_prestamo',
                                    'interes',
                                    'duracion',
                                    'estado_solicitud',
                                    array(
                                        'class' => 'bootstrap.widgets.TbButtonColumn',
                                    ),
                                ),
                            ));
            ?>
                </div>
                <div class="tab-pane" id="tab_2">
                        <?php echo $this->renderPartial('application.views.solicitudprestamo._formSolicitudInicio',array('model' => $modelSolicitudPrestamo));?>
                </div>
            </div>
        </div>
    </div>
</div>