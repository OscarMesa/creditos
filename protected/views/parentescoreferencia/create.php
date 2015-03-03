<?php
$this->breadcrumbs=array(
	'Parentesco Referencia'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Listar Parentesco referencia','url'=>array('index')),
array('label'=>'Administrador Parentesco referencia','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>