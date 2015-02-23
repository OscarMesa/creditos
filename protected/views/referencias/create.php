<?php
$this->breadcrumbs=array(
	'Referencias'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Listar Referencias','url'=>array('index')),
array('label'=>'Administrar Referencias','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>