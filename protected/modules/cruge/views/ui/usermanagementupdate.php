<?php
/*
  $model:
  es una instancia que implementa a ICrugeStoredUser, y debe traer ya los campos extra 	accesibles desde $model->getFields()

  $boolIsUserManagement:
  true o false.  si es true indica que esta operandose bajo el action de adminstracion de usuarios, si es false indica que se esta operando bajo 'editar tu perfil'
 */
?>

<div>
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'crugestoreduser-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => false,
    ));
    ?>
    <div class="col-md-10">
<?php echo $form->errorSummary($model); ?>
        <div class="box box-primary" style="padding-bottom: 6px;">
            <div class="box-header">
                <h3><?php echo ucfirst(CrugeTranslator::t("datos de la cuenta")); ?></h3>
            </div>    
            <div class="box-body" >
                <div class='form-group'>
                    <?php echo $form->labelEx($model, 'username'); ?>
<?php echo $form->textField($model, 'username',array('class' => "form-control")); ?>
                    <?php echo $form->error($model, 'username'); ?>
                </div>
                <div class='form-group'>
                    <?php echo $form->labelEx($model, 'email'); ?>
<?php echo $form->textField($model, 'email',array('class' => "form-control")); ?>
                    <?php echo $form->error($model, 'email'); ?>
                </div>
                <div class='form-group'>
                    <?php echo $form->labelEx($model, 'newPassword'); ?>
<?php echo $form->textField($model, 'newPassword', array('size' => 10, 'class' => "form-control")); ?>
<?php echo $form->error($model, 'newPassword'); ?>
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
                        'error' => new CJavaScriptExpression('fnError')),
                            array('class'=>'btn bg-olive btn-flat margin')
                    );
                    ?>
                </div>
            </div>

            <div class="box-body" style="border: 1px solid #CCC4C4; margin: 10px;border-radius: 5px">
                <div class='form-group textfield-readonly'>
                    <?php echo $form->labelEx($model, 'regdate'); ?>
                    <?php
                    echo $form->textField($model, 'regdate'
                            , array(
                        'readonly' => 'readonly',
                        'value' => Yii::app()->user->ui->formatDate($model->regdate),
                                'class' => "form-control",
                            )
                    );
                    ?>
                </div>
                <div class='form-group textfield-readonly'>
                    <?php echo $form->labelEx($model, 'actdate'); ?>
<?php
echo $form->textField($model, 'actdate'
        , array(
    'readonly' => 'readonly',
    'value' => Yii::app()->user->ui->formatDate($model->actdate),
            'class' => "form-control",
        )
);
?>
                </div>
                <div class='form-group textfield-readonly'>
<?php echo $form->labelEx($model, 'logondate'); ?>
<?php
echo $form->textField($model, 'logondate'
        , array(
    'readonly' => 'readonly',
    'value' => Yii::app()->user->ui->formatDate($model->logondate),
            'class' => "form-control",
        )
);
?>
                </div>
            </div>
        </div>


        <!-- inicio de campos extra definidos por el administrador del sistema -->
        <?php
        if (count($model->getFields()) > 0) {
            echo "<div class='box box-primary'>";
            echo "<div class='box-header'><h3>" . ucfirst(CrugeTranslator::t("perfil")) . "</h3></div>";
            echo "<div class='box-body'>";
            foreach ($model->getFields() as $f) {
                // aqui $f es una instancia que implementa a: ICrugeField
                echo "<div class='form-group'>";
                echo Yii::app()->user->um->getLabelField($f);
                echo Yii::app()->user->um->getInputField($model, $f,array('class' => "form-control"));
                echo $form->error($model, $f->fieldname);
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
        }
        ?>
        <!-- fin de campos extra definidos por el administrador del sistema -->




        <!-- inicio de opciones avanazadas, solo accesible bajo el rol 'admin' -->

<?php
	if($boolIsUserManagement)
	if(Yii::app()->user->checkAccess('edit-advanced-profile-features'
		,__FILE__." linea ".__LINE__))
            $this->renderPartial('_edit-advanced-profile-features'
        , array('model' => $model, 'form' => $form), false);
?>

        <!-- fin de opciones avanazadas, solo accesible bajo el rol 'admin' -->

        <div class="box-footer">
<?php Yii::app()->user->ui->tbutton("Guardar Cambios"); ?>

        </div>

    </div>
<?php $this->endWidget(); ?>
</div>
