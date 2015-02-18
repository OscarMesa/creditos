<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'pensiones-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block"><?php echo Yii::t('viewApp', "Fields with <span class='required'>*</span> are required."); ?></p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'pension',array('class'=>'span5','maxlength'=>80)); ?>

<div class="box-footer">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar'',
		)); ?>
</div>

<?php $this->endWidget(); ?>
