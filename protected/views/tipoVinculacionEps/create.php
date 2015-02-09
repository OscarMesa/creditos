<?php
$this->breadcrumbs=array(
	'Tipo Vinculacion Eps'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List TipoVinculacionEps','url'=>array('index')),
array('label'=>'Manage TipoVinculacionEps','url'=>array('admin')),
);
?>

<h1>Create TipoVinculacionEps</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>