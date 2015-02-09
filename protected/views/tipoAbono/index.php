<?php
$this->breadcrumbs=array(
	'Tipo Abonos',
);

$this->menu=array(
array('label'=>'Create TipoAbono','url'=>array('create')),
array('label'=>'Manage TipoAbono','url'=>array('admin')),
);
?>

<h1>Tipo Abonos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
