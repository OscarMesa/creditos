<?php
$this->breadcrumbs=array(
	'Estado Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List EstadoCliente','url'=>array('index')),
array('label'=>'Create EstadoCliente','url'=>array('create')),
array('label'=>'Update EstadoCliente','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete EstadoCliente','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage EstadoCliente','url'=>array('admin')),
);
?>

<h1>View EstadoCliente #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'descripcion',
),
)); ?>
