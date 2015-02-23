<?php
$this->breadcrumbs=array(
	'Información Laboral'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Lista de la Información Laboral','url'=>array('index')),
array('label'=>'Administrador Información Laboral','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>