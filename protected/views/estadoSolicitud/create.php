<?php
$this->breadcrumbs=array(
	'Estado Solicituds'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List EstadoSolicitud','url'=>array('index')),
array('label'=>'Manage EstadoSolicitud','url'=>array('admin')),
);
?>

<h1>Create EstadoSolicitud</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>