<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cedula,
);

$this->menu=array(
array('label'=>'List Cliente','url'=>array('index')),
array('label'=>'Create Cliente','url'=>array('create')),
array('label'=>'Update Cliente','url'=>array('update','id'=>$model->cedula)),
array('label'=>'Delete Cliente','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->cedula),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Cliente','url'=>array('admin')),
);
?>

<?php $this->titlePage = "Ver Cliente #".$model->cedula; ?>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'cedula',
		'nombres',
		'apellidos',
		'telefono',
		'correo',
		'celular',
		'direccion',
                array(
                    'name' => 'solo_codeudor',
                    'value' => function($data){
                            return $data->solo_codeudor == 0 ? "No":"Si";
                    }
                ),
                array(
                    'name' => 'estado_cliente',
                    'value' => function($data){
                            return $data->estadoCliente->descripcion;
                    }
                ),
		array(
                    'name' => 'pension',
                    'value' => function($data){
                            return $data->pension0->pension;
                    }
                ),
                array(
                    'name' => 'tp_vinculacion_eps',
                    'value' => function($data){
                            return $data->tpVinculacionEps->descripcion;
                    }
                ),
                array(
                    'name' => 'eps',
                    'value' => function($data){
                            return $data->eps0->descripcion;
                    }
                ),
),
)); ?>
