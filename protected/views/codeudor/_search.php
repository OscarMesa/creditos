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
        <?php echo $form->textFieldRow($model, 'cedula_cliente', array('class' => 'form-control')); ?>
    </div>    
    <div class="form-group">
        <?php echo $form->textFieldRow($model, 'cedula_codeudor', array('class' => 'form-control')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->textFieldRow($model, 'id', array('class' => 'form-control')); ?>
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