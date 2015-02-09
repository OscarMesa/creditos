<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_codeudor')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_codeudor); ?>
	<br />


</div>