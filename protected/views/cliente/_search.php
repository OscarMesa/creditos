<div class="col-md-6">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
        'htmlOptions' => array(
            'role' => 'form'
        )
    ));
    ?>
    <div class="box-primary">
        <div class="form-group">
            <?php echo $form->textFieldRow($model, 'cedula', array('class' => 'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $form->textFieldRow($model, 'nombre_completo', array('class' => 'form-control', 'maxlength' => 80)); ?>
        </div>
        <div class="form-group">    
            <?php echo $form->textFieldRow($model, 'telefono', array('class' => 'form-control', 'maxlength' => 30)); ?>
        </div>
        <div class="form-group">    
            <?php echo $form->textFieldRow($model, 'correo', array('class' => 'form-control', 'maxlength' => 50)); ?>
        </div>
        <div class="form-group">    
            <?php echo $form->textFieldRow($model, 'celular', array('class' => 'form-control', 'maxlength' => 30)); ?>
        </div>
        <div class="form-group">    
            <?php echo $form->textFieldRow($model, 'direccion', array('class' => 'form-control', 'maxlength' => 50)); ?>
        </div>
        <div class="form-group sl2">    
            <?php
                    echo $form->labelEx($model, 'pension', array());

                    echo $form->hiddenField($model, 'pension', array('class' => 'form-control'));

                    $this->widget('ext.select2.ESelect2', array(
                        'selector' => '#Vcliente_pension',
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
                        ),
                    ));
                    ?>
        </div>
        <div class="form-group sl2"> 
             <?php
                    echo $form->labelEx($model, 'eps', array());


                    echo $form->hiddenField($model, 'eps', array('class' => 'form-control'));

                    $this->widget('ext.select2.ESelect2', array(
                        'selector' => '#Vcliente_eps',
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
                        ),
                    ));
                    ?>
        </div>  
        <div class="box-footer">
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'submit',
                'type' => 'primary',
                'label' => 'Buscar',
            ));
            ?>
        </div>
    </div>
<?php $this->endWidget(); ?>
</div>