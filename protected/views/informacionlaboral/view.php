<?php
$this->breadcrumbs=array(
	'Informacion Laborals'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List InformacionLaboral','url'=>array('index')),
array('label'=>'Create InformacionLaboral','url'=>array('create')),
array('label'=>'Update InformacionLaboral','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete InformacionLaboral','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage InformacionLaboral','url'=>array('admin')),
);
?>

<?php $this->titlePage = "Ver información laboral #$model->id"; ?>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
                array(
                    'name' => 'cliente',
                    'value' => function($data){
                        return $data->cliente->nombre_completo;
                    }
                ),
		'direccion',
		'telefono',
		'celular',
		'cargo',
		'salario',
		'tiempo_laborado',
		'contrato',
		'nombre_compania',
),
)); ?>
