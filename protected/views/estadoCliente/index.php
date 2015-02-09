<?php
$this->breadcrumbs=array(
	'Estado Clientes',
);

$this->menu=array(
array('label'=>'Create EstadoCliente','url'=>array('create')),
array('label'=>'Manage EstadoCliente','url'=>array('admin')),
);
?>

<h1>Estado Clientes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
