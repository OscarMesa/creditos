<?php
$this->breadcrumbs=array(
	'Tipo Referencias'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List TipoReferencia','url'=>array('index')),
array('label'=>'Manage TipoReferencia','url'=>array('admin')),
);
?>

<h1>Create TipoReferencia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>