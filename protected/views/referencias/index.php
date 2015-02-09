<?php
$this->breadcrumbs=array(
	'Referenciases',
);

$this->menu=array(
array('label'=>'Create Referencias','url'=>array('create')),
array('label'=>'Manage Referencias','url'=>array('admin')),
);
?>

<h1>Referenciases</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
