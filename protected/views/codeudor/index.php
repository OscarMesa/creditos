<?php
$this->breadcrumbs=array(
	'Codeudors',
);

$this->menu=array(
array('label'=>'Create Codeudor','url'=>array('create')),
array('label'=>'Manage Codeudor','url'=>array('admin')),
);
?>

<h1>Codeudors</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
