<?php
$this->breadcrumbs=array(
	'Pensiones'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Pensiones','url'=>array('index')),
array('label'=>'Create Pensiones','url'=>array('create')),
array('label'=>'Update Pensiones','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Pensiones','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Pensiones','url'=>array('admin')),
);
?>

<h1>View Pensiones #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'pension',
),
)); ?>
