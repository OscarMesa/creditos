<?php
$this->breadcrumbs=array(
	'Codeudors'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Codeudor','url'=>array('index')),
array('label'=>'Manage Codeudor','url'=>array('admin')),
);
?>
<?php $this->titlePage = "Crear Codeudor" ?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>