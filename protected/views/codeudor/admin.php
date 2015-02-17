<?php
$this->breadcrumbs = array(
    'Codeudors' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Codeudor', 'url' => array('index')),
    array('label' => 'Create Codeudor', 'url' => array('create')),
);
?>
<article class="col-md-10">    
    <div class="box box-primary">
        <?php
        Yii::app()->clientScript->registerScript('search', "
                                                $('.search-button').click(function(){
                                                $('.search-form').toggle();
                                                return false;
                                                });
                                                $('.search-form form').submit(function(){
                                                $.fn.yiiGridView.update('codeudor-grid', {
                                                data: $(this).serialize()
                                                });
                                                return false;
                                                });
                                         ");
        ?>


        <div class="box-header">
            <div class="box-title">
                Listado de los codeudores.
            </div><br/><br/>
            También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
                &lt;&gt;</b>
            o <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar cómo debe hacerse la comparación.
        </div>

        <?php echo CHtml::link('Busqueda avanzada', '#', array('class' => 'search-button btn')); ?>
        <div class="search-form" style="display:none">
            <?php
            $this->renderPartial('_search', array(
                'model' => $model,
            ));
            ?>
        </div><!-- search-form -->

        <?php
        $baseUrl = Yii::app()->baseUrl;
        $cs = Yii::app()->getClientScript();
        $cs->registerCssFile($baseUrl . '/themes/credito/plugins/datatables/dataTables.bootstrap.css');
        $this->widget('application.components.CREGridView', array(
            'id' => 'codeudor-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'itemsCssClass' => 'table table-bordered table-hover dataTable',
            'columns' => array(
                array(
                    'class' => 'CREDataColumn',
                    'name' => 'cedula_cliente',
                    'header' => 'Cliente',
                    'filterHtmlOptions' => array(),
                    'type' => 'raw',
                    'headerHtmlOptions'=>array(
                        'class'=>"sorting_asc",'role'=>"columnheader",'tabindex'=>"0",'aria-controls'=>"example2", 'rowspan'=>"1", 'colspan'=>"1",'aria-sort'=>"ascending",'aria-label'=>""
                    ),
//                    'value' => 'CHtml::link($data->family_name,$data->id)'
                ),
                array(
                    'class' => 'CREDataColumn',
                    'name' => 'cedula_codeudor',
                    'header' => 'Codeudor',
                    'type' => 'raw',
                    'headerHtmlOptions'=>array(
                        'class'=>"sorting_asc",'role'=>"columnheader",'tabindex'=>"0",'aria-controls'=>"example2", 'rowspan'=>"1", 'colspan'=>"1",'aria-sort'=>"ascending",'aria-label'=>""
                    ),
//                    'value' => 'CHtml::link($data->given_name,$data->id)'
                ),
//                'id',
                array(
                    'class' => 'application.components.CREButtonColumn',
                ),
            ),
            'htmlOptions' => array(
                'class' => 'dataTables_wrapper form-inline',
                'role' => 'grid'
            )
        ));
        ?>
    </div>
</article>