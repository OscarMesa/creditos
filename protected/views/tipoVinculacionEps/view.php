<?php
$this->breadcrumbs=array(
	'Tipo Vinculacion Eps'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List TipoVinculacionEps','url'=>array('index')),
array('label'=>'Create TipoVinculacionEps','url'=>array('create')),
array('label'=>'Update TipoVinculacionEps','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete TipoVinculacionEps','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage TipoVinculacionEps','url'=>array('admin')),
);
?>

<h1>View TipoVinculacionEps #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'descripcion',
),
)); ?>
