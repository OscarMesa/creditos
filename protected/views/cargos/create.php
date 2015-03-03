<?php
$this->breadcrumbs=array(
	'Cargoses'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Cargos','url'=>array('index')),
array('label'=>'Manage Cargos','url'=>array('admin')),
);
?>

<?php $this->titlePage = "Crear Cargo"; ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>