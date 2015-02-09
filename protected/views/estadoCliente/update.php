<?php
$this->breadcrumbs=array(
	'Estado Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List EstadoCliente','url'=>array('index')),
	array('label'=>'Create EstadoCliente','url'=>array('create')),
	array('label'=>'View EstadoCliente','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage EstadoCliente','url'=>array('admin')),
	);
	?>

	<h1>Update EstadoCliente <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>