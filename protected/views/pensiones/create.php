<?php
$this->breadcrumbs=array(
	'Pensiones'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Pensiones','url'=>array('index')),
array('label'=>'Manage Pensiones','url'=>array('admin')),
);
?>

<h1>Create Pensiones</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>