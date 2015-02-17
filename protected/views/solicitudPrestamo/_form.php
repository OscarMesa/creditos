<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'solicitud-prestamo-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block"><?php echo Yii::t('viewApp', "Fields with <span class='required'>*</span> are required."); ?></p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'cliente',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cantidad_prestamo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'interes',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'duracion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'estado_solicitud',array('class'=>'span5')); ?>

<div class="box-footer">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
