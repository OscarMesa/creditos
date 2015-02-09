<?php
$this->breadcrumbs=array(
	'Tipo Abonos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List TipoAbono','url'=>array('index')),
array('label'=>'Manage TipoAbono','url'=>array('admin')),
);
?>

<h1>Create TipoAbono</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>