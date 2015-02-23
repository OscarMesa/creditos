<?php
$this->breadcrumbs = array(
    'Clientes' => array('index'),
    'Administrador',
);

$this->menu = array(
    array('label' => 'Listar cliente', 'url' => array('index')),
    array('label' => 'Crear Cliente', 'url' => array('create')),
);
?>
<article class="col-md-30">    
    <div class="box box-primary">
        <?php
        Yii::app()->clientScript->registerScript('search', "
                        $('.search-button').click(function(){
                        $('.search-form').toggle();
                        return false;
                        });
                        $('.search-form form').submit(function(){
                        $.fn.yiiGridView.update('cliente-grid', {
                        data: $(this).serialize()
                        });
                        return false;
                        });
        ");
        ?>

        <div class="box-header">
            <div class="box-title">
                Listado de clientes
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

        <?php
        $baseUrl = Yii::app()->baseUrl;
        $cs = Yii::app()->getClientScript();
        $cs->registerCssFile($baseUrl . '/themes/credito/plugins/datatables/dataTables.bootstrap.css');
        $cs->registerCss("clientesCss",".content { overflow-x: scroll !important; }");
        $this->widget('application.components.CREGridView', array(
            'id' => 'cliente-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'itemsCssClass' => 'table table-bordered table-hover dataTable',
            'columns' => array(
                array(
                    'class' => 'CREDataColumn',
                    'name' => 'cedula',
                    'filterHtmlOptions' => array(),
                    'type' => 'raw',
                    'headerHtmlOptions' => array(
                        'class' => "sorting_asc", 'role' => "columnheader", 'tabindex' => "0", 'aria-controls' => "example2", 'rowspan' => "1", 'colspan' => "1", 'aria-sort' => "ascending", 'aria-label' => ""
                    ),
                ),
                array(
                    'class' => 'CREDataColumn',
                    'name' => 'nombre_completo',
                    'filterHtmlOptions' => array(),
                    'type' => 'raw',
                    'headerHtmlOptions' => array(
                        'class' => "sorting_asc", 'role' => "columnheader", 'tabindex' => "0", 'aria-controls' => "example2", 'rowspan' => "1", 'colspan' => "1", 'aria-sort' => "ascending", 'aria-label' => ""
                    ),
                ),
                /*array(
                    'class' => 'CREDataColumn',
                    'name' => 'apellidos',
                    'filterHtmlOptions' => array(),
                    'type' => 'raw',
                    'headerHtmlOptions' => array(
                        'class' => "sorting_asc", 'role' => "columnheader", 'tabindex' => "0", 'aria-controls' => "example2", 'rowspan' => "1", 'colspan' => "1", 'aria-sort' => "ascending", 'aria-label' => ""
                    ),
                ),*/
                array(
                    'class' => 'CREDataColumn',
                    'name' => 'telefono',
                    'filterHtmlOptions' => array(),
                    'type' => 'raw',
                    'headerHtmlOptions' => array(
                        'class' => "sorting_asc", 'role' => "columnheader", 'tabindex' => "0", 'aria-controls' => "example2", 'rowspan' => "1", 'colspan' => "1", 'aria-sort' => "ascending", 'aria-label' => ""
                    ),
                ),
                array(
                    'class' => 'CREDataColumn',
                    'name' => 'correo',
                    'filterHtmlOptions' => array(),
                    'type' => 'raw',
                    'headerHtmlOptions' => array(
                        'class' => "sorting_asc", 'role' => "columnheader", 'tabindex' => "0", 'aria-controls' => "example2", 'rowspan' => "1", 'colspan' => "1", 'aria-sort' => "ascending", 'aria-label' => ""
                    ),
                ),
                array(
                    'class' => 'CREDataColumn',
                    'name' => 'celular',
                    'filterHtmlOptions' => array(),
                    'type' => 'raw',
                    'headerHtmlOptions' => array(
                        'class' => "sorting_asc", 'role' => "columnheader", 'tabindex' => "0", 'aria-controls' => "example2", 'rowspan' => "1", 'colspan' => "1", 'aria-sort' => "ascending", 'aria-label' => ""
                    ),
                ),
                /*array(
                    'class' => 'CREDataColumn',
                    'name' => 'direccion',
                    'filterHtmlOptions' => array(),
                    'type' => 'raw',
                    'headerHtmlOptions' => array(
                        'class' => "sorting_asc", 'role' => "columnheader", 'tabindex' => "0", 'aria-controls' => "example2", 'rowspan' => "1", 'colspan' => "1", 'aria-sort' => "ascending", 'aria-label' => ""
                    ),
                ),*/
                array(
                    'class' => 'CREDataColumn',
                    'name' => 'estado_cliente',
                    'filterHtmlOptions' => array(),
                    'type' => 'raw',
                    'headerHtmlOptions' => array(
                        'class' => "sorting_asc", 'role' => "columnheader", 'tabindex' => "0", 'aria-controls' => "example2", 'rowspan' => "1", 'colspan' => "1", 'aria-sort' => "ascending", 'aria-label' => ""
                    ),
                ),
     /*         
                '',
                
                  '',
                  'solo_codeudor',
                  'pension',
                  'tp_vinculacion_eps',
                  'eps',
                 */
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