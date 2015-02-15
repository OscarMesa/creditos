<?php
$this->breadcrumbs=array(
	'Codeudors',
);

$this->menu=array(
array('label'=>'Create Codeudor','url'=>array('create')),
array('label'=>'Manage Codeudor','url'=>array('admin')),
);
?>

<section class="content-header">
<h1>Codeudores</h1>
</section>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
