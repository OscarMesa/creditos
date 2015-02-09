<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'informacion-laboral-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'cliente',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nombre_compañia',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'direccion',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'telefono',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'celular',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'cargo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'salario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tiempo_laborado',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'contrato',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
