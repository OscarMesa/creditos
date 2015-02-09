<?php
$this->breadcrumbs=array(
	'Parentesco Referencias'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List ParentescoReferencia','url'=>array('index')),
array('label'=>'Manage ParentescoReferencia','url'=>array('admin')),
);
?>

<h1>Create ParentescoReferencia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>