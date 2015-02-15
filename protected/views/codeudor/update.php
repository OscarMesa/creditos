<?php
$this->breadcrumbs=array(
	'Codeudors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Codeudor','url'=>array('index')),
	array('label'=>'Create Codeudor','url'=>array('create')),
	array('label'=>'View Codeudor','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Codeudor','url'=>array('admin')),
	);
	?>
<section class="content-header">
	<h1>Actualizar Codeudor <?php echo $model->id; ?></h1>
</section>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>