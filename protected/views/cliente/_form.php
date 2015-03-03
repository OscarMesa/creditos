<article class="col-md-10">
    <div class="box box-primary">
        <div class="box-header">
            <div class="box-title">Cliente que realizará el prestamo</div>
        </div>
        <?php
        $this->renderPartial('application.views.cliente.menuCICL');
        $baseUrl = Yii::app()->baseUrl;
        $cs = Yii::app()->getClientScript();

        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/input-mask/jquery.inputmask.js', CClientScript::POS_END);
        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/input-mask/jquery.inputmask.date.extensions.js', CClientScript::POS_END);
        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/input-mask/jquery.inputmask.extensions.js', CClientScript::POS_END);
        $cs->registerScript('input-mask', ''
                . '$("[data-mask]").inputmask();'
                . '');
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'cliente-form',
            'enableAjaxValidation' => false,
            'htmlOptions' => array(
                'role' => 'form'
            )
        ));
        ?>
        <fieldset>
            <div class="box-body">
                <p class="help-block"><?php echo Yii::t('viewApp', "Fields with <span class='required'>*</span> are required."); ?></p>

                <?php echo $form->errorSummary($model); ?>

                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'cedula', array('class' => 'form-control')); ?>
                </div>   
                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'nombres', array('class' => 'form-control', 'maxlength' => 80)); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'apellidos', array('class' => 'form-control', 'maxlength' => 80)); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->label($model, 'telefono'); ?>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <?php echo $form->textField($model, 'telefono', array('class' => 'form-control', 'maxlength' => 30, 'data-inputmask' => "'mask': ['999-99-99']", 'data-mask' => '')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'correo', array('class' => 'form-control', 'maxlength' => 50)); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->label($model, 'celular'); ?>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <?php echo $form->textField($model, 'celular', array('class' => 'form-control', 'maxlength' => 30, 'data-inputmask' => '"mask": "(999) 999-9999"', 'data-mask' => '')); ?>

                    </div>
                </div>
                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'direccion', array('class' => 'form-control', 'maxlength' => 50)); ?>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <?php echo $form->checkBoxRow($model, 'solo_codeudor', array()); ?>
                    </div>
                </div>
                <div class="form-group sl2">
                    <?php
                    echo $form->labelEx($model, 'estado_cliente', array());

                    echo $form->hiddenField($model, 'estado_cliente', array('class' => 'form-control'));

                    $this->widget('ext.select2.ESelect2', array(
                        'selector' => '#Cliente_estado_cliente',
                        'model' => $model,
                        'attribute' => 'estado_cliente',
                        'data' => array(),
                        'options' => array(
                            'allowClear' => true,
                            'placeholder' => 'Selecione el fondo de pensión del cliente',
                            //'minimumInputLength' => 4, 
                            'ajax' => array(
                                'url' => Yii::app()->createUrl('estadoCliente/listarEstadosAjax'), // Yii::app()->createUrl('Dpeticion/ListarCiudadanos'),
                                'dataType' => 'json',
                                'type' => 'GET',
                                // 'quietMillis'=> 100,
                                'data' => 'js: function(text,page) {
                                    return {
                                        term: text, 
                                        page_limit: 10,
                                        page: page,
                                        estado:' . ($model->estado_cliente != null ? $model->estado_cliente : 0) . '
                                    };
                                }',
                                'results' => 'js:function(data,page) { var more = (page * 10) < data.total; return {results: data.results, more:more };
                             }',
                                'formatResult' => 'js:function(data){
                                 return data.name;
                              }',
                                'formatSelection' => 'js: function(data) {
                                return data.name;
                              }',
                                'formatNoMatches' => 'js: function (data) { return "No matches found"; }',
                            ),
                            'initSelection' => 'js: function (element, callback) {
                                return $.getJSON("' . Yii::app()->createUrl('estadoCliente/listarEstadosAjax') . '", {term:"",estado:' . ($model->estado_cliente != null ? $model->estado_cliente : 0) . '}, function (data) {
                                    return callback(data);

                                });
                                }'
                        ),
                    ));
                    ?>
                </div>
                <div class="form-group sl2">
                    <?php
                    echo $form->labelEx($model, 'pension', array());

                    echo $form->hiddenField($model, 'pension', array('class' => 'form-control'));

                    $this->widget('ext.select2.ESelect2', array(
                        'selector' => '#Cliente_pension',
                        'model' => $model,
                        'attribute' => 'pension',
                        'data' => array(),
                        'options' => array(
                            'allowClear' => true,
                            'placeholder' => 'Selecione el fondo de pensión del cliente',
                            //'minimumInputLength' => 4, 
                            'ajax' => array(
                                'url' => Yii::app()->createUrl('pensiones/listarPensionesAjax'), // Yii::app()->createUrl('Dpeticion/ListarCiudadanos'),
                                'dataType' => 'json',
                                'type' => 'GET',
                                // 'quietMillis'=> 100,
                                'data' => 'js: function(text,page) {
                                    return {
                                        term: text, 
                                        page_limit: 10,
                                        page: page,
                                        cliente:' . ($model->pension != null ? $model->pension : 0) . '
                                    };
                                }',
                                'results' => 'js:function(data,page) { var more = (page * 10) < data.total; return {results: data.results, more:more };
                             }',
                                'formatResult' => 'js:function(data){
                                 return data.name;
                              }',
                                'formatSelection' => 'js: function(data) {
                                return data.name;
                              }',
                                'formatNoMatches' => 'js: function (data) { return "No matches found"; }',
                            ),
                            'initSelection' => 'js: function (element, callback) {
                                return $.getJSON("' . Yii::app()->createUrl('pensiones/listarPensionesAjax') . '", {term:"",pension:' . ($model->pension != null ? $model->pension : 0) . '}, function (data) {
                                    return callback(data);

                                });
                                }'
                        ),
                    ));
                    ?>
                </div>
                <div class="form-group sl2">
                    <?php
                    echo $form->labelEx($model, 'tp_vinculacion_eps', array());

                    echo $form->hiddenField($model, 'tp_vinculacion_eps', array('class' => 'form-control'));

                    $this->widget('ext.select2.ESelect2', array(
                        'selector' => '#Cliente_tp_vinculacion_eps',
                        'model' => $model,
                        'attribute' => 'tp_vinculacion_eps',
                        'data' => array(),
                        'options' => array(
                            'allowClear' => true,
                            'placeholder' => 'Selecione el tipo de vinculación',
                            //'minimumInputLength' => 4, 
                            'ajax' => array(
                                'url' => Yii::app()->createUrl('tipoVinculacionEps/listarTpVincEPSAjax'), // Yii::app()->createUrl('Dpeticion/ListarCiudadanos'),
                                'dataType' => 'json',
                                'type' => 'GET',
                                // 'quietMillis'=> 100,
                                'data' => 'js: function(text,page) {
                                    return {
                                        term: text, 
                                        page_limit: 10,
                                        page: page,
                                        cliente:' . ($model->tp_vinculacion_eps != null ? $model->tp_vinculacion_eps : 0) . '
                                    };
                                }',
                                'results' => 'js:function(data,page) { var more = (page * 10) < data.total; return {results: data.results, more:more };
                             }',
                                'formatResult' => 'js:function(data){
                                 return data.name;
                              }',
                                'formatSelection' => 'js: function(data) {
                                return data.name;
                              }',
                                'formatNoMatches' => 'js: function (data) { return "No matches found"; }',
                            ),
                            'initSelection' => 'js: function (element, callback) {
                                return $.getJSON("' . Yii::app()->createUrl('tipoVinculacionEps/listarTpVincEPSAjax') . '", {term:"",tpv:' . ($model->tp_vinculacion_eps != null ? $model->tp_vinculacion_eps : 0) . '}, function (data) {
                                    return callback(data);

                                });
                                }'
                        ),
                    ));
                    ?>
                </div>
                <div class="form-group sl2">
                    <?php
                    echo $form->labelEx($model, 'eps', array());


                    echo $form->hiddenField($model, 'eps', array('class' => 'form-control'));

                    $this->widget('ext.select2.ESelect2', array(
                        'selector' => '#Cliente_eps',
                        'model' => $model,
                        'attribute' => 'eps',
                        'data' => array(),
                        'options' => array(
                            'allowClear' => true,
                            'placeholder' => 'Selecione la eps del cliente',
                            //'minimumInputLength' => 4, 
                            'ajax' => array(
                                'url' => Yii::app()->createUrl('Eps/listarEpsAjax'), // Yii::app()->createUrl('Dpeticion/ListarCiudadanos'),
                                'dataType' => 'json',
                                'type' => 'GET',
                                // 'quietMillis'=> 100,
                                'data' => 'js: function(text,page) {
                                    return {
                                        term: text, 
                                        page_limit: 10,
                                        page: page,
                                        cliente:' . ($model->eps != null ? $model->eps : 0) . '
                                    };
                                }',
                                'results' => 'js:function(data,page) { var more = (page * 10) < data.total; return {results: data.results, more:more };
                             }',
                                'formatResult' => 'js:function(data){
                                 return data.name;
                              }',
                                'formatSelection' => 'js: function(data) {
                                return data.name;
                              }',
                                'formatNoMatches' => 'js: function (data) { return "No matches found"; }',
                            ),
                            'initSelection' => 'js: function (element, callback) {
                                return $.getJSON("' . Yii::app()->createUrl('Eps/listarEpsAjax') . '", {term:"",eps:' . ($model->eps != null ? $model->eps : 'NULL') . '}, function (data) {
                                    return callback(data);

                                });
                                }'
                        ),
                    ));
                    ?>
                </div>
            </div>
            <div class="box-footer">
                <?php
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'label' => $model->isNewRecord ? 'Crear' : 'Guardar',
                ));
                ?>
            </div>
        </fieldset>
        <?php $this->endWidget(); ?>
    </div>
</article>