<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'cliente',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'cantidad_prestamo',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'interes',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'duracion',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'estado_solicitud',array('class'=>'span5')); ?>

	<div class="box-footer">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Buscar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
