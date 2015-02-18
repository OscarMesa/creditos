<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'referencias-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block"><?php echo Yii::t('viewApp', "Fields with <span class='required'>*</span> are required."); ?></p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'tipo_referencia',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'parentesco',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nombres',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'calular',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'telefono',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'direccion',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'cliente',array('class'=>'span5')); ?>

<div class="box-footer">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar'',
		)); ?>
</div>

<?php $this->endWidget(); ?>
