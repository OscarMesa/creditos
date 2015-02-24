<section class="content-header">
    <h1><?php echo ucwords(CrugeTranslator::t("registrarse")); ?></h1>
</section><br/>
<div class="col-md-15">
    <?php
    /*
      $model:  es una instancia que implementa a ICrugeStoredUser
     */
    ?>
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'registration-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => false,
    ));
    ?>
    <?php echo $form->errorSummary($model); ?>
    <div class="box box-success">
        <div class="box-header">
            <h3><?php echo ucfirst(CrugeTranslator::t("datos de la cuenta")); ?></h3>
        </div>
        <div class="box-body">
            <?php
            foreach (CrugeUtil::config()->availableAuthModes as $authmode) {
                echo "<div class='form-group'>";
                echo $form->labelEx($model, $authmode);
                echo $form->textField($model, $authmode, array("class" => "form-control"));
                echo $form->error($model, $authmode);
                echo "</div>";
            }
            ?>
            <?php echo $form->labelEx($model, 'newPassword'); ?>
            <div class='form-group'>
                <?php echo $form->textField($model, 'newPassword', array("class" => "form-control")); ?>
                <p class='hint'><?php
                    echo CrugeTranslator::t(
                            "su contraseña, letras o digitos o los caracteres @#$%. minimo 6 simbolos.");
                    ?></p>
                <?php echo $form->error($model, 'newPassword'); ?>
            </div>
            <script>
                function fnSuccess(data) {
                    $('#CrugeStoredUser_newPassword').val(data);
                }
                function fnError(e) {
                    alert("error: " + e.responseText);
                }
            </script>
            <?php
            echo CHtml::ajaxbutton(
                    CrugeTranslator::t("Generar una nueva clave")
                    , Yii::app()->user->ui->ajaxGenerateNewPasswordUrl
                    , array('success' => new CJavaScriptExpression('fnSuccess'),
                'error' => new CJavaScriptExpression('fnError')), array('class' => 'btn btn-success btn-flat')
            );
            ?>
        </div>
    </div>


    <!-- inicio de campos extra definidos por el administrador del sistema -->
    <?php
    if (count($model->getFields()) > 0) {
        echo "<div class='box box-success'>
                        <div class='box-header'>";
        echo "<h3>" . ucfirst(CrugeTranslator::t("registration", "Profile fields")) . "</h3>"
        . "</div>"
        . "<div class='box-body'>";
        foreach ($model->getFields() as $f) {
            // aqui $f es una instancia que implementa a: ICrugeField
            echo "<div class='form-group'>";
            echo Yii::app()->user->um->getLabelField($f);
            echo Yii::app()->user->um->getInputField($model, $f, array('class' => 'form-control'));
            echo $form->error($model, $f->fieldname);
            echo "</div>";
        }
        echo ""
        . "</div>"
        . "</div>";
    }
    ?>
    <!-- fin de campos extra definidos por el administrador del sistema -->


    <!-- inicio - terminos y condiciones -->
    <?php
    if (Yii::app()->user->um->getDefaultSystem()->getn('registerusingterms') == 1) {
        ?>
        <div class='box box-success'>
            <div class='box-header'>
                <h3><?php echo ucfirst(CrugeTranslator::t("terminos y condiciones")); ?></h3>
            </div>
            <div class='box-body'>
                <div class='form-group'>
                    <?php
                    echo CHtml::textArea('terms'
                            , Yii::app()->user->um->getDefaultSystem()->get('terms')
                            , array('readonly' => 'readonly', 'rows' => 5, 'cols' => '80%', 'class' => 'form-control')
                    );
                    ?>
                </div>
                <div class="checkbox">
                    <label>
                        <?php echo $form->checkBox($model, 'terminosYCondiciones'); ?>
                        <?php echo CrugeTranslator::t(Yii::app()->user->um->getDefaultSystem()->get('registerusingtermslabel')); ?>
                        <span class='required'>*</span>
                        <?php echo $form->error($model, 'terminosYCondiciones'); ?>
                    </label>
                </div>
            </div>
        </div>
        <!-- fin - terminos y condiciones -->
    <?php } ?>



    <!-- inicio pide captcha -->
    <?php if (Yii::app()->user->um->getDefaultSystem()->getn('registerusingcaptcha') == 1) 
    {
        ?>
        <div class="box box-success">
            <div class="box-header">
                <h3><?php echo ucfirst(CrugeTranslator::t("codigo de seguridad")); ?></h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <div>
                        <?php $this->widget('CCaptcha'); ?>
    <?php echo $form->textField($model, 'verifyCode', array('class' => 'form-control')); ?>
                    </div>
                    <small><?php echo CrugeTranslator::t("por favor ingrese los caracteres o digitos que vea en la imagen"); ?></small>
    <?php echo $form->error($model, 'verifyCode'); ?>
                </div>
            </div>
        </div>
<?php } ?>
    <!-- fin pide captcha-->

<div class="box">
<div class="box-body">
    <div class="box-footer" style="border-top:none">
    <?php Yii::app()->user->ui->tbutton("Registrarse"); ?>
    </div>
</div>
</div>
<?php $this->endWidget(); ?>
</div>
