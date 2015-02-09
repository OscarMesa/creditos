<?php
$this->breadcrumbs=array(
	'Referenciases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Referencias','url'=>array('index')),
	array('label'=>'Create Referencias','url'=>array('create')),
	array('label'=>'View Referencias','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Referencias','url'=>array('admin')),
	);
	?>

	<h1>Update Referencias <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>