<?php
$this->breadcrumbs=array(
	'Codeudors'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Codeudor','url'=>array('index')),
array('label'=>'Create Codeudor','url'=>array('create')),
array('label'=>'Update Codeudor','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Codeudor','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Codeudor','url'=>array('admin')),
);
?>
    <section class="content-header">
        <h1>Ver Codeudor #<?php echo $model->id; ?></h1>
    </section>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'cedula_cliente',
		'cedula_codeudor',
		'id',
),
)); ?>
