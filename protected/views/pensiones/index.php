<?php
$this->breadcrumbs=array(
	'Pensiones',
);

$this->menu=array(
array('label'=>'Create Pensiones','url'=>array('create')),
array('label'=>'Manage Pensiones','url'=>array('admin')),
);
?>

<h1>Pensiones</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
