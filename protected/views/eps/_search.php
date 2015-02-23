<div class="col-md-6">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>
    <div class="box-primary">
        <div class="form-group">
            <?php echo $form->textFieldRow($model, 'id', array('class' => 'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $form->textFieldRow($model, 'descripcion', array('class' => 'form-control', 'maxlength' => 90)); ?>
        </div>
    </div>
    <div class="box-footer">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => 'Buscar',
        ));
        ?>
    </div>

<?php $this->endWidget(); ?>
</div>