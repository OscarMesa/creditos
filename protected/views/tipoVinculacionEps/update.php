<?php
$this->breadcrumbs=array(
	'Tipo Vinculacion Eps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List TipoVinculacionEps','url'=>array('index')),
	array('label'=>'Create TipoVinculacionEps','url'=>array('create')),
	array('label'=>'View TipoVinculacionEps','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TipoVinculacionEps','url'=>array('admin')),
	);
	?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>