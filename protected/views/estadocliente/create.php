<?php
$this->breadcrumbs=array(
	'Estado Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List EstadoCliente','url'=>array('index')),
array('label'=>'Manage EstadoCliente','url'=>array('admin')),
);
?>

<h1>Create EstadoCliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>