<?php
$this->breadcrumbs=array(
	'Eps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'Listar Eps','url'=>array('index')),
	array('label'=>'Crear Eps','url'=>array('create')),
	array('label'=>'Ver Eps','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar Eps','url'=>array('admin')),
	);
	?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>