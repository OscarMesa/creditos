<?php
$this->breadcrumbs=array(
	'Pensiones'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Pensiones','url'=>array('index')),
array('label'=>'Manage Pensiones','url'=>array('admin')),
);
$this->titlePage = "Crear entidad pensionaria";
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>