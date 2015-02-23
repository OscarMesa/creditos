<?php
$this->breadcrumbs=array(
	'Referenciases'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Referencias','url'=>array('index')),
array('label'=>'Create Referencias','url'=>array('create')),
array('label'=>'Update Referencias','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Referencias','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Referencias','url'=>array('admin')),
);
?>

<h1>View Referencias #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'tipo_referencia',
		'parentesco',
		'nombres',
		'celular',
		'telefono',
		'direccion',
		'cliente',
),
)); ?>
