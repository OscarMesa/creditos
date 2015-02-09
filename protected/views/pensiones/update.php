<?php
$this->breadcrumbs=array(
	'Pensiones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Pensiones','url'=>array('index')),
	array('label'=>'Create Pensiones','url'=>array('create')),
	array('label'=>'View Pensiones','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Pensiones','url'=>array('admin')),
	);
	?>

	<h1>Update Pensiones <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>