<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cedula),array('view','id'=>$data->cedula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::encode($data->nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('solo_codeudor')); ?>:</b>
	<?php echo CHtml::encode($data->solo_codeudor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->estado_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pension')); ?>:</b>
	<?php echo CHtml::encode($data->pension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp_vinculacion_eps')); ?>:</b>
	<?php echo CHtml::encode($data->tp_vinculacion_eps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eps')); ?>:</b>
	<?php echo CHtml::encode($data->eps); ?>
	<br />

	*/ ?>

</div>