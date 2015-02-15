<?php
$this->breadcrumbs=array(
	'Codeudors'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Codeudor','url'=>array('index')),
array('label'=>'Create Codeudor','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('codeudor-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<section class="content-header">
<h1>Administrar Codeudores</h1>
</section>

<p>
	También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	o <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar cómo debe hacerse la comparación.
</p>

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'codeudor-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'cedula_cliente',
		'cedula_codeudor',
		'id',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
