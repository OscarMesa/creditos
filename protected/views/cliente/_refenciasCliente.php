<hr/>
<div class="box-header" style="padding: 0px;padding-left: 10px">
    <div class="box-title">
        Referencias personales
    </div>
</div>
<hr/>

<div class="row">
    <?php
            $this->widget('bootstrap.widgets.TbGridView', array(
                'id' => 'referencias-grid',
                'dataProvider' => $model->buscarReferencias(),
                'filter' => $model,
                'itemsCssClass' => 'table table-bordered table-hover dataTable',
                'columns' => array(
                    'id',
                    'tipo_referencia',
                    'parentesco',
                    'nombres',
                    'celular',
                    'telefono',
                    /*
                      'direccion',
                      'cliente',
                     */
                    array(
                        'class' => 'bootstrap.widgets.TbButtonColumn',
                    ),
                ),
            ));
            ?>
</div>