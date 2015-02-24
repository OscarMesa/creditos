<?php
// llamada cuando el actionRegistration ha insertado a un usuario
?>
<div class="box box-default">
    <div class="box-header with-border">
        <i class="fa fa-users"></i><h1 class="box-title"><?php echo CrugeTranslator::t("Bienvenido"); ?></h1>
    </div>
    <div class="box-body">
        <div class="callout callout-success">
            <p><b><?php echo CrugeTranslator::t('registration', 'The account has been created!'); ?></b></p>
            <p><?php echo CrugeTranslator::t('registration', 'Click here to login using new credentials:'); ?>
                <?php echo Yii::app()->user->ui->loginLink; ?>
            </p>
        </div>
    </div>
</div>
 