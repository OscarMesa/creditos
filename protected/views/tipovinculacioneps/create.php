<?php
$this->breadcrumbs=array(
	'Tipo Vinculacion Eps'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Listar Tipo Vinculacion Eps','url'=>array('index')),
array('label'=>'Administrar Tipo Vinculacion Eps','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>