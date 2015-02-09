<?php
$this->breadcrumbs=array(
	'Parentesco Referencias'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List ParentescoReferencia','url'=>array('index')),
array('label'=>'Create ParentescoReferencia','url'=>array('create')),
array('label'=>'Update ParentescoReferencia','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete ParentescoReferencia','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage ParentescoReferencia','url'=>array('admin')),
);
?>

<h1>View ParentescoReferencia #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'descripcion',
),
)); ?>
