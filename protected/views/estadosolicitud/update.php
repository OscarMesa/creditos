<?php
$this->breadcrumbs=array(
	'Estado Solicituds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List EstadoSolicitud','url'=>array('index')),
	array('label'=>'Create EstadoSolicitud','url'=>array('create')),
	array('label'=>'View EstadoSolicitud','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage EstadoSolicitud','url'=>array('admin')),
	);
	?>

	<h1>Update EstadoSolicitud <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>