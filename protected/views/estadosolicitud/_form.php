<article class="col-md-10">
    <div class="box box-primary">
        <div class="box-header">
            <div class="box-title">Esto del cliente en el aplicativo</div>
        </div>
        <?php
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'estado-solicitud-form',
            'enableAjaxValidation' => false,
        ));
        ?>
        <fieldset>
            <div class="box-body">
                <p class="help-block"><?php echo Yii::t('viewApp', "Fields with <span class='required'>*</span> are required."); ?></p>

                <?php echo $form->errorSummary($model); ?>
                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'id', array('class' => 'form-control')); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->textFieldRow($model, 'descripcion', array('class' => 'form-control', 'maxlength' => 50)); ?>
                </div>
            </div>
            <div class="box-footer">
                <?php
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'label' => $model->isNewRecord ? 'Crear' : 'Guardar',
                ));
                ?>
            </div>
        </fieldset>
        <?php $this->endWidget(); ?>
    </div>
</article>