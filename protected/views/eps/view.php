<?php
$this->breadcrumbs=array(
	'Eps'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Eps','url'=>array('index')),
array('label'=>'Create Eps','url'=>array('create')),
array('label'=>'Update Eps','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Eps','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Eps','url'=>array('admin')),
);
?>

<h1>View Eps #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'descripcion',
),
)); ?>
