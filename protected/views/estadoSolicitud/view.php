<?php
$this->breadcrumbs=array(
	'Estado Solicituds'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List EstadoSolicitud','url'=>array('index')),
array('label'=>'Create EstadoSolicitud','url'=>array('create')),
array('label'=>'Update EstadoSolicitud','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete EstadoSolicitud','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage EstadoSolicitud','url'=>array('admin')),
);
?>

<h1>View EstadoSolicitud #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'descripcion',
),
)); ?>
