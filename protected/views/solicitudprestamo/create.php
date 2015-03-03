<?php
$this->breadcrumbs=array(
	'Solicitud Prestamos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List SolicitudPrestamo','url'=>array('index')),
array('label'=>'Manage SolicitudPrestamo','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>