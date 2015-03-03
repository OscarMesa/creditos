<div class="col-md-10">
    <div class="box box-primary">
        <div class="box-header">
            <div class="box-title">Cargos que puede ocupar una persona al interior de una empresa</div>
        </div>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'cargos-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->errorSummary($model); ?>

<fieldset>
            <div class="box-body">
    <p class="help-block"><?php echo Yii::t('viewApp', "Fields with <span class='required'>*</span> are required."); ?></p>
                <div class="form-group">
	<?php echo $form->textFieldRow($model,'descripcion',array('class'=>'form-control','maxlength'=>50)); ?>
            </div>
            </div>
</fieldset>
<div class="box-footer">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
    </div>
</div>