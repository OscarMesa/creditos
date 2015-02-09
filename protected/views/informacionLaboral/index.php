<?php
$this->breadcrumbs=array(
	'Informacion Laborals',
);

$this->menu=array(
array('label'=>'Create InformacionLaboral','url'=>array('create')),
array('label'=>'Manage InformacionLaboral','url'=>array('admin')),
);
?>

<h1>Informacion Laborals</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
