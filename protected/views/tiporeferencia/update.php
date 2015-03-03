<?php
$this->breadcrumbs=array(
	'Tipo Referencias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List TipoReferencia','url'=>array('index')),
	array('label'=>'Create TipoReferencia','url'=>array('create')),
	array('label'=>'View TipoReferencia','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TipoReferencia','url'=>array('admin')),
	);
	?>

	<h1>Update TipoReferencia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>