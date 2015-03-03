<?php
$this->breadcrumbs=array(
	'Estado Solicituds',
);

$this->menu=array(
array('label'=>'Create EstadoSolicitud','url'=>array('create')),
array('label'=>'Manage EstadoSolicitud','url'=>array('admin')),
);
?>

<h1>Estado Solicituds</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
