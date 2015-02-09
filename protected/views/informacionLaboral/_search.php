<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

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
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
