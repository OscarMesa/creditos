<div class="col-md-10">
    <div class="box box-primary">
        <div class="box-header">
            <div class="box-title">Información laboral del cliente</div>
        </div>
        <?php
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'informacion-laboral-form',
            'enableAjaxValidation' => false,
        ));
        ?>
        <fieldset>
            <div class="box-body">
                <p class="help-block"><?php echo Yii::t('viewApp', "Fields with <span class='required'>*</span> are required."); ?></p>

                <?php echo $form->errorSummary($model); ?>
                <div class="form-group sl2">    
                    <?php
                    echo $form->label($model, 'cliente', array());

                    echo $form->hiddenField($model, 'cliente', array('class' => 'form-control'));

                    $this->widget('ext.select2.ESelect2', array(
                        'selector' => '#InformacionLaboral_cliente',
                        'model' => $model,
                        'attribute' => 'cliente',
                        'data' => array(),
                        'options' => array(
                            'allowClear' => true,
                            'placeholder' => 'Selecione el cliente',
                            //'minimumInputLength' => 4, 
                            'ajax' => array(
                                'url' => Yii::app()->createUrl('Cliente/listarClientesAjax'), // Yii::app()->createUrl('Dpeticion/ListarCiudadanos'),
                                'dataType' => 'json',
                                'type' => 'GET',
                                // 'quietMillis'=> 100,
                                'data' => 'js: function(text,page) {
                                    return {
                                        term: text, 
                                        page_limit: 10,
                                        page: page,
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
                        ),
                    ));
                    ?>
                </div>
                
                 <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'nombre_compania', array('class' => 'form-control', 'maxlength' => 100)); ?>
                </div>
                
                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'direccion', array('class' => 'form-control', 'maxlength' => 80)); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'telefono', array('class' => 'form-control', 'maxlength' => 80)); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'celular', array('class' => 'form-control', 'maxlength' => 80)); ?>
                </div>
                <div class="form-group sl2">                    
                    <?php
                    echo $form->label($model, 'cargo', array());

                    echo $form->hiddenField($model, 'cargo', array('class' => 'form-control'));

                    $this->widget('ext.select2.ESelect2', array(
                        'selector' => '#InformacionLaboral_cargo',
                        'model' => $model,
                        'attribute' => 'cargo',
                        'data' => array(),
                        'options' => array(
                            'allowClear' => true,
                            'placeholder' => 'Selecione el cargo',
                            //'minimumInputLength' => 4, 
                            'ajax' => array(
                                'url' => Yii::app()->createUrl('Cargos/listarCargos'), // Yii::app()->createUrl('Dpeticion/ListarCiudadanos'),
                                'dataType' => 'json',
                                'type' => 'GET',
                                // 'quietMillis'=> 100,
                                'data' => 'js: function(text,page) {
                                    return {
                                        term: text, 
                                        page_limit: 10,
                                        page: page,
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
                        ),
                    ));
                    ?>
                </div>
                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'salario', array('class' => 'form-control')); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'tiempo_laborado', array('class' => 'form-control')); ?>
                </div>
                <div class="form-group sl2">               
                    <?php
                    echo $form->label($model, 'contrato', array());

                    echo $form->hiddenField($model, 'contrato', array('class' => 'form-control'));

                    $this->widget('ext.select2.ESelect2', array(
                        'selector' => '#InformacionLaboral_contrato',
                        'model' => $model,
                        'attribute' => 'contrato',
                        'data' => array(),
                        'options' => array(
                            'allowClear' => true,
                            'placeholder' => 'Selecione el cargo',
                            //'minimumInputLength' => 4, 
                            'ajax' => array(
                                'url' => Yii::app()->createUrl('Cargos/listarContratos'), // Yii::app()->createUrl('Dpeticion/ListarCiudadanos'),
                                'dataType' => 'json',
                                'type' => 'GET',
                                // 'quietMillis'=> 100,
                                'data' => 'js: function(text,page) {
                                    return {
                                        term: text, 
                                        page_limit: 10,
                                        page: page,
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
</div>