<?php
$this->breadcrumbs=array(
	'Solicitud Prestamos',
);

$this->menu=array(
array('label'=>'Create SolicitudPrestamo','url'=>array('create')),
array('label'=>'Manage SolicitudPrestamo','url'=>array('admin')),
);
?>

<h1>Solicitud Prestamos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
