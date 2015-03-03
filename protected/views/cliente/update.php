<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cedula=>array('view','id'=>$model->cedula),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Cliente','url'=>array('index')),
	array('label'=>'Create Cliente','url'=>array('create')),
	array('label'=>'View Cliente','url'=>array('view','id'=>$model->cedula)),
	array('label'=>'Manage Cliente','url'=>array('admin')),
	);
	?>

	<?php $this->titlePage= "Actualizar cliente ".$model->cedula; ?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>