<section class="content-header">
    <h1><?php echo CrugeTranslator::t("Recuperar la clave"); ?></h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <?php if (Yii::app()->user->hasFlash('pwdrecflash')): ?>
                    <div class="box-body">
                        <div class="callout callout-success">
                            <h4>Notificación enviada.</h4>
                            <p><?php echo Yii::app()->user->getFlash('pwdrecflash'); ?></p>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="box-header">
                        <h3 class="box-title">Enviaremos un correo con los datos de tu cuenta.</h3>
                    </div>
                    <?php
                    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                        'id' => 'pwdrcv-form',
                        'enableClientValidation' => false,
                        'clientOptions' => array(
                            'validateOnSubmit' => true,
                        ),
                    ));
                    ?>
                    <div class="box-body">
                        <?php echo $form->errorSummary($model); ?>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'username'); ?>
                            <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
                            <?php echo $form->error($model, 'username'); ?>
                        </div>

                        <?php if (CCaptcha::checkRequirements()): ?>
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'verifyCode'); ?>
                                <div>
                                    <?php $this->widget('CCaptcha'); ?>
                                    <?php echo $form->textField($model, 'verifyCode', array('class' => 'form-control')); ?>
                                </div>
                                <div class="hint"><?php echo CrugeTranslator::t("por favor ingrese los caracteres o digitos que vea en la imagen"); ?></div>
                                <?php echo $form->error($model, 'verifyCode'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="box-footer">
                            <?php Yii::app()->user->ui->tbutton("Recuperar la Clave"); ?>
                        </div>
                    </div>
                    <?php $this->endWidget(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>