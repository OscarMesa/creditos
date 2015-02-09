<?php
$this->breadcrumbs=array(
	'Tipo Referencias'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List TipoReferencia','url'=>array('index')),
array('label'=>'Create TipoReferencia','url'=>array('create')),
array('label'=>'Update TipoReferencia','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete TipoReferencia','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage TipoReferencia','url'=>array('admin')),
);
?>

<h1>View TipoReferencia #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'descripcion',
),
)); ?>
