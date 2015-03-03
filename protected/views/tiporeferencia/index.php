<?php
$this->breadcrumbs=array(
	'Tipo Referencias',
);

$this->menu=array(
array('label'=>'Create TipoReferencia','url'=>array('create')),
array('label'=>'Manage TipoReferencia','url'=>array('admin')),
);
?>

<h1>Tipo Referencias</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
