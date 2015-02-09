<?php
$this->breadcrumbs=array(
	'Parentesco Referencias',
);

$this->menu=array(
array('label'=>'Create ParentescoReferencia','url'=>array('create')),
array('label'=>'Manage ParentescoReferencia','url'=>array('admin')),
);
?>

<h1>Parentesco Referencias</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
