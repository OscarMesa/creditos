<?php
$this->breadcrumbs=array(
	'Eps'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Eps','url'=>array('index')),
array('label'=>'Manage Eps','url'=>array('admin')),
);
$this->titlePage = "Crear Eps";
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>