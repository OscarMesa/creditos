<?php
$this->breadcrumbs=array(
	'Referenciases'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Referencias','url'=>array('index')),
array('label'=>'Manage Referencias','url'=>array('admin')),
);
?>

<h1>Create Referencias</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>