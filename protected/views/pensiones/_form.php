<article class="col-md-10">
    <div class="box box-primary">
        <div class="box-header">
            <div class="box-title">Datos necesarios para la entidad pensionaria.</div>
        </div>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'pensiones-form',
	'enableAjaxValidation'=>false,
)); ?>
 <fieldset>
            <div class="box-body">
<p class="help-block"><?php echo Yii::t('viewApp', "Fields with <span class='required'>*</span> are required."); ?></p>

<?php echo $form->errorSummary($model); ?>
<div class="form-group">
	<?php echo $form->textFieldRow($model,'pension',array('class'=>'form-control','maxlength'=>80)); ?>
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
</article>