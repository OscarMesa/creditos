<?php
$this->breadcrumbs=array(
	'Parentesco Referencias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List ParentescoReferencia','url'=>array('index')),
	array('label'=>'Create ParentescoReferencia','url'=>array('create')),
	array('label'=>'View ParentescoReferencia','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ParentescoReferencia','url'=>array('admin')),
	);
	?>

	<h1>Update ParentescoReferencia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>