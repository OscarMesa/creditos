<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'cedula',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'nombres',array('class'=>'span5','maxlength'=>80)); ?>

		<?php echo $form->textFieldRow($model,'apellidos',array('class'=>'span5','maxlength'=>80)); ?>

		<?php echo $form->textFieldRow($model,'telefono',array('class'=>'span5','maxlength'=>30)); ?>

		<?php echo $form->textFieldRow($model,'correo',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'celular',array('class'=>'span5','maxlength'=>30)); ?>

		<?php echo $form->textFieldRow($model,'direccion',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->checkBoxRow($model,'solo_codeudor'); ?>

		<?php echo $form->textFieldRow($model,'estado_cliente',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'pension',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'tp_vinculacion_eps',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'eps',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
