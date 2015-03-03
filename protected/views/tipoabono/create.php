<?php
$this->breadcrumbs=array(
	'Tipo Abonos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Listar Tipo de abono','url'=>array('index')),
array('label'=>'Administra Tipo abono','url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>