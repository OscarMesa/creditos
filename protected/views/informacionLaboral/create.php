<?php
$this->breadcrumbs=array(
	'Informacion Laborals'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List InformacionLaboral','url'=>array('index')),
array('label'=>'Manage InformacionLaboral','url'=>array('admin')),
);
?>

<h1>Create InformacionLaboral</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>