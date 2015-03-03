<?php
$this->breadcrumbs=array(
	'Solicitud Prestamos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List SolicitudPrestamo','url'=>array('index')),
	array('label'=>'Create SolicitudPrestamo','url'=>array('create')),
	array('label'=>'View SolicitudPrestamo','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage SolicitudPrestamo','url'=>array('admin')),
	);
	?>

	<h1>Update SolicitudPrestamo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>