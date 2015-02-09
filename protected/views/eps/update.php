<?php
$this->breadcrumbs=array(
	'Eps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Eps','url'=>array('index')),
	array('label'=>'Create Eps','url'=>array('create')),
	array('label'=>'View Eps','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Eps','url'=>array('admin')),
	);
	?>

	<h1>Update Eps <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>