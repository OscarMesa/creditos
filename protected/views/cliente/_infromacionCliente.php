<hr/>
<div class="box-header" style="padding: 0px;padding-left: 10px">
    <div class="box-title">
        Informacón basica
    </div>
</div>
<hr/>

<section class="row">
    <article class="col-xs-6">
        <div class="form-group">
            <b><?php echo CHtml::encode($model->getAttributeLabel('nombres')); ?>: </b>
            <?php echo CHtml::encode($model->nombres); ?>
        </div>
        <div class="form-group">
            <b><?php echo CHtml::encode($model->getAttributeLabel('telefono')); ?>: </b>
            <?php echo CHtml::encode($model->telefono); ?>
        </div>
        <div class="form-group">
            <b><?php echo CHtml::encode($model->getAttributeLabel('direccion')); ?>: </b>
            <?php echo CHtml::encode($model->direccion); ?>
        </div>
    </article>
    <article class="col-xs-6">
        <div class="form-group">
            <b><?php echo CHtml::encode($model->getAttributeLabel('apellidos')); ?>: </b>
            <?php echo CHtml::encode($model->apellidos); ?>
        </div>
        <div class="form-group">
            <b><?php echo CHtml::encode($model->getAttributeLabel('celular')); ?>: </b>
            <?php echo CHtml::encode($model->celular); ?>
        </div>
    </article>
</section>
<hr/>
<div class="box-header" style="padding: 0px;padding-left: 10px">
    <div class="box-title">
        Informacón laboral
    </div>
</div>
<hr/>
<?php if($model->informacionLaborals != null){?>
<section class="row">
    <article class="col-xs-6">
        <div class="form-group">
            <b><?php echo CHtml::encode($model->informacionLaborals->getAttributeLabel('nombre_compania')); ?>: </b>
            <?php echo CHtml::encode($model->informacionLaborals->nombre_compania); ?>
        </div>
    </article>
    <article class="col-xs-6">bloque 2</article>
</section>
<?php } ?>