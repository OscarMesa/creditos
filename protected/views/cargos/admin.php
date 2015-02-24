<?php
$this->breadcrumbs = array(
    'Cargoses' => array('index'),
    'Manage',
);
?>
<article class="col-xs-12">     
    <div class="box">
        <?php
        $this->menu = array(
            array('label' => 'Lista de Cargos', 'url' => array('index')),
            array('label' => 'Crear Cargos', 'url' => array('create')),
        );

        Yii::app()->clientScript->registerScript('search', "
                                            $('.search-button').click(function(){
                                            $('.search-form').toggle();
                                            return false;
                                            });
                                            $('.search-form form').submit(function(){
                                            $.fn.yiiGridView.update('cargos-grid', {
                                            data: $(this).serialize()
                                            });
                                            return false;
                                            });
                                    ");
        ?>

        <div class="box-header">
            <div class="box-title">
                Listado de los codeudores de los clientes.
            </div><br/><br/>
            También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
                &lt;&gt;</b>
            o <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar cómo debe hacerse la comparación.
        </div>

        <?php echo CHtml::link('Busqueda Avanzada', '#', array('class' => 'search-button btn')); ?>
        <div class="search-form" style="display:none">
            <?php
            $this->renderPartial('_search', array(
                'model' => $model,
            ));
            ?>
        </div><!-- search-form -->
        <div class="box-body">
            <?php
            $this->widget('bootstrap.widgets.TbGridView', array(
                'id' => 'cargos-grid',
                'dataProvider' => $model->search(),
                'filter' => $model,
                'itemsCssClass' => 'table table-bordered table-hover dataTable',
                'columns' => array(
                    'id',
                    'descripcion',
                    array(
                        'class' => 'bootstrap.widgets.TbButtonColumn',
                    ),
                ),
            ));
            ?>
        </div>
    </div>
</article>