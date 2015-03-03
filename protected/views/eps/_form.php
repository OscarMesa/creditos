<article class="col-md-10">
    <div class="box box-primary">
        <div class="box-header">
            <div class="box-title">Datos necesarios para la creación de la EPS.</div>
        </div>
        <?php
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'eps-form',
            'enableAjaxValidation' => false,
        ));
        ?>
        <fieldset>
            <div class="box-body">
                <p class="help-block"><?php echo Yii::t('viewApp', "Fields with <span class='required'>*</span> are required."); ?></p>

                <?php echo $form->errorSummary($model); ?>

                <?php echo $form->textFieldRow($model, 'descripcion', array('class' => 'form-control', 'maxlength' => 90)); ?>
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