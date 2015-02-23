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

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>