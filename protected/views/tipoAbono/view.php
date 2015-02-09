<?php
$this->breadcrumbs=array(
	'Tipo Abonos'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List TipoAbono','url'=>array('index')),
array('label'=>'Create TipoAbono','url'=>array('create')),
array('label'=>'Update TipoAbono','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete TipoAbono','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage TipoAbono','url'=>array('admin')),
);
?>

<h1>View TipoAbono #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'descripcion',
),
)); ?>
