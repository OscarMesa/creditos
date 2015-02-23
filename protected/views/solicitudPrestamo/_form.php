<div class="col-md-10">
    <div class="box box-primary">
        <div class="box-header">
            <div class="box-title">Solicitud de prestamo - cliente</div>
        </div>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'solicitud-prestamo-form',
	'enableAjaxValidation'=>false,
)); ?>
<fieldset>
            <div class="box-body">
<p class="help-block"><?php echo Yii::t('viewApp', "Fields with <span class='required'>*</span> are required."); ?></p>

<?php echo $form->errorSummary($model); ?>
<div class="form-group sl2">
            <?php
                    echo $form->labelEx($model, 'cliente', array());

                    echo $form->hiddenField($model, 'cliente', array('class' => 'form-control'));

                    $this->widget('ext.select2.ESelect2', array(
                        'selector' => '#SolicitudPrestamo_cliente',
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
	<?php echo $form->textFieldRow($model,'cantidad_prestamo',array('class'=>'form-control')); ?>
     </div>
<div class="form-group">
	<?php echo $form->textFieldRow($model,'interes',array('class'=>'form-control')); ?>
 </div>
    <div class="form-group">
	<?php echo $form->textFieldRow($model,'duracion',array('class'=>'form-control')); ?>
 </div>
    <div class="form-group sl2">   
            <?php
                    echo $form->labelEx($model, 'estado_solicitud', array());

                    echo $form->hiddenField($model, 'estado_solicitud', array('class' => 'form-control'));

                    $this->widget('ext.select2.ESelect2', array(
                        'selector' => '#SolicitudPrestamo_estado_solicitud',
                        'model' => $model,
                        'attribute' => 'estado_solicitud',
                        'data' => array(),
                        'options' => array(
                            'allowClear' => true,
                            'placeholder' => 'Selecione el estado de la solicitud',
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
</div>
<div class="box-footer">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>
            
</fieldset>
<?php $this->endWidget(); ?>
</div>
</div>

  