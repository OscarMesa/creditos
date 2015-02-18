<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Cliente','url'=>array('index')),
array('label'=>'Manage Cliente','url'=>array('admin')),
);
?>

<?php $this->titlePage = "Create Cliente" ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>