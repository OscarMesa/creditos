<?php
$this->breadcrumbs=array(
	'Solicitud Prestamos'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List SolicitudPrestamo','url'=>array('index')),
array('label'=>'Create SolicitudPrestamo','url'=>array('create')),
array('label'=>'Update SolicitudPrestamo','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete SolicitudPrestamo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage SolicitudPrestamo','url'=>array('admin')),
);
?>

<h1>View SolicitudPrestamo #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'cliente',
		'cantidad_prestamo',
		'interes',
		'duracion',
		'estado_solicitud',
),
)); ?>
