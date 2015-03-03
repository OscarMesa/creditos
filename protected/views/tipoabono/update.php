<?php
$this->breadcrumbs=array(
	'Tipo Abonos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List TipoAbono','url'=>array('index')),
	array('label'=>'Create TipoAbono','url'=>array('create')),
	array('label'=>'View TipoAbono','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TipoAbono','url'=>array('admin')),
	);
	?>

	<h1>Update TipoAbono <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>