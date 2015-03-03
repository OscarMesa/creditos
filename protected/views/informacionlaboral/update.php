<?php
$this->breadcrumbs=array(
	'Informacion Laborals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List InformacionLaboral','url'=>array('index')),
	array('label'=>'Create InformacionLaboral','url'=>array('create')),
	array('label'=>'View InformacionLaboral','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage InformacionLaboral','url'=>array('admin')),
	);
	?>

	<h1>Update InformacionLaboral <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>