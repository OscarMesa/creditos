<article class="col-md-10">
    <div class="box box-primary">
        <div class="box-header">
            <div class="box-title">Codeudor del cliente</div>
        </div>
        <?php
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'codeudor-form',
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
            <div class="form-group sl2">
                <?php echo $form->labelEx($model, 'cedula_cliente', array()); ?>
                <?php
                
                echo $form->hiddenField($model, 'cedula_cliente', array('class' => 'form-control'));
                
                      $this->widget('ext.select2.ESelect2',array(
                           'selector' => '#Codeudor_cedula_cliente',
                           'model'=>$model,
                           'attribute' => 'cedula_cliente',
                           'data' => array(),
                          // 'attribute' => 'Codeudor_cedula_codeudor',
//                            'name'=>'Codeudor_cedula_codeudor',
                           'options'  => array(                         
                           'allowClear'=>true,                         
                           'placeholder'=>'Selecione el cliente',
                           //'minimumInputLength' => 4, 
                           'ajax' => array(
                          'url'=>Yii::app()->createUrl('Codeudor/listarClientes'),// Yii::app()->createUrl('Dpeticion/ListarCiudadanos'),
                            'dataType' => 'json',
                            'type'=>'GET',
                           // 'quietMillis'=> 100,
                            'data' => 'js: function(text,page) {
                                    return {
                                        term: text, 
                                        page_limit: 10,
                                        page: page,
                                        cliente:'.($model->cedula_cliente != null ? $model->cedula_cliente : 0).'
                                    };
                                }',
 
                            'results'=>'js:function(data,page) { var more = (page * 10) < data.total; return {results: data.results, more:more };
                             }',
                            'formatResult'  => 'js:function(data){
                                 return data.name;
                              }',
                            'formatSelection' => 'js: function(data) {
                                return data.name;
                              }',
                            'formatNoMatches'=> 'js: function (data) { return "No matches found"; }',   
 
                        ),
                       ),
 
                        ));
                
                
                ?>
            </div>
            <div class="form-group sl2">
                <?php echo $form->labelEx($model, 'cedula_codeudor', array()); ?>
                <?php
                
                echo $form->hiddenField($model, 'cedula_codeudor', array('class' => 'form-control','style'=>''));
                
                        $this->widget('ext.select2.ESelect2',array(
                           'selector' => '#Codeudor_cedula_codeudor',
                           'model'=>$model,
                           'attribute' => 'cedula_codeudor',
                           'data' => array(),
                          // 'attribute' => 'Codeudor_cedula_codeudor',
//                            'name'=>'Codeudor_cedula_codeudor',
                           'options'  => array(                         
                           'allowClear'=>true,                         
                           'placeholder'=>'Selecione a el codeudor',
                           //'minimumInputLength' => 4, 
                           'ajax' => array(
                          'url'=>Yii::app()->createUrl('Codeudor/listarClientes'),// Yii::app()->createUrl('Dpeticion/ListarCiudadanos'),
                            'dataType' => 'json',
                            'type'=>'GET',
                           // 'quietMillis'=> 100,
                            'data' => 'js: function(text,page) {
                                    return {
                                        term: text, 
                                        page_limit: 10,
                                        page: page,
                                        cliente:'.($model->cedula_codeudor != null ? $model->cedula_codeudor : 0).'
                                    };
                                }',
 
                            'results'=>'js:function(data,page) { var more = (page * 10) < data.total; return {results: data.results, more:more };
                             }',
                            'formatResult'  => 'js:function(data){
                                 return data.name;
                              }',
                            'formatSelection' => 'js: function(data) {
                                return data.name;
                              }',
                            'formatNoMatches'=> 'js: function (data) { return "No matches found"; }',   
 
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