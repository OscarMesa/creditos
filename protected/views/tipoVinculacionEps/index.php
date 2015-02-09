<?php
$this->breadcrumbs=array(
	'Tipo Vinculacion Eps',
);

$this->menu=array(
array('label'=>'Create TipoVinculacionEps','url'=>array('create')),
array('label'=>'Manage TipoVinculacionEps','url'=>array('admin')),
);
?>

<h1>Tipo Vinculacion Eps</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
