<?php
$this->breadcrumbs=array(
	'Cargoses'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Cargos','url'=>array('index')),
array('label'=>'Create Cargos','url'=>array('create')),
array('label'=>'Update Cargos','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Cargos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Cargos','url'=>array('admin')),
);
?>

<h1>View Cargos #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'descripcion',
),
)); ?>
