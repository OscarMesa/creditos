<article class="col-md-10">
    <div class="box box-primary">
        <div class="box-header">
            <div class="box-title">Referencia del cliente</div>
        </div>
        <?php
        $this->renderPartial('application.views.cliente.menuCICL');
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'referencias-form',
            'enableAjaxValidation' => false,
        ));
        ?>
        <fieldset>
            <div class="box-body">
                <p class="help-block"><?php echo Yii::t('viewApp', "Fields with <span class='required'>*</span> are required."); ?></p>

                <?php echo $form->errorSummary($model); ?>
                <div class="form-group sl2">
                    <?php
                    echo $form->labelEx($model, 'cliente', array());

                    echo $form->hiddenField($model, 'cliente', array('class' => 'form-control'));

                    $this->widget('ext.select2.ESelect2', array(
                        'selector' => '#Referencias_cliente',
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
                    <?php echo $form->textFieldRow($model, 'nombres', array('class' => 'form-control', 'maxlength' => 100)); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'celular', array('class' => 'form-control', 'maxlength' => 20)); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'telefono', array('class' => 'form-control', 'maxlength' => 15)); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'direccion', array('class' => 'form-control', 'maxlength' => 30)); ?>
                </div>
                <div class="form-group sl2">
                    <?php
                    echo $form->labelEx($model, 'tipo_referencia', array());

                    echo $form->hiddenField($model, 'tipo_referencia', array('class' => 'form-control'));

                    $this->widget('ext.select2.ESelect2', array(
                        'selector' => '#Referencias_tipo_referencia',
                        'model' => $model,
                        'attribute' => 'tipo_referencia',
                        'data' => array(),
                        'options' => array(
                            'allowClear' => true,
                            'placeholder' => 'Selecione el tipo de referencia',
                            //'minimumInputLength' => 4, 
                            'ajax' => array(
                                'url' => Yii::app()->createUrl('tipoReferencia/listarTipoDeReferenciaAjax'), // Yii::app()->createUrl('Dpeticion/ListarCiudadanos'),
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
                <div class="form-group sl2">  
                    <?php
                    echo $form->labelEx($model, 'parentesco', array());

                    echo $form->hiddenField($model, 'parentesco', array('class' => 'form-control'));

                    $this->widget('ext.select2.ESelect2', array(
                        'selector' => '#Referencias_parentesco',
                        'model' => $model,
                        'attribute' => 'parentesco',
                        'data' => array(),
                        'options' => array(
                            'allowClear' => true,
                            'placeholder' => 'Selecione el parentesco con el cliente',
                            //'minimumInputLength' => 4, 
                            'ajax' => array(
                                'url' => Yii::app()->createUrl('parentescoReferencia/listarParentescoClienteAjax'), // Yii::app()->createUrl('Dpeticion/ListarCiudadanos'),
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
</article>