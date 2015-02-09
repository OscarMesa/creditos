<?php
$this->breadcrumbs=array(
	'Eps',
);

$this->menu=array(
array('label'=>'Create Eps','url'=>array('create')),
array('label'=>'Manage Eps','url'=>array('admin')),
);
?>

<h1>Eps</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
