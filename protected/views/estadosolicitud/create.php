<?php
$this->breadcrumbs=array(
	'Estado Solicituds'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Listar estado solicitud','url'=>array('index')),
array('label'=>'Administrador estado solicitud','url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>