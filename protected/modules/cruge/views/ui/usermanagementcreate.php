<div class="">
    <?php
    /*
      $model:  es una instancia que implementa a ICrugeStoredUser
     */
    ?>
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'crugestoreduser-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => false,
    ));
    ?>
    <div class="col-md-10">
        <div class="box box-primary">
            <div class="box-header">
                <h3><?php echo "Datos básicos para crear un usuario."; ?></h3>
            </div>  
            <?php echo $form->errorSummary($model); ?>
            <div class="box-body" >
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'username'); ?>
                        <?php echo $form->textField($model, 'username',array('class' => "form-control")); ?>
                    <?php echo $form->error($model, 'username'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'email'); ?>
<?php echo $form->textField($model, 'email',array('class' => "form-control")); ?>
                    <?php echo $form->error($model, 'email'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'newPassword'); ?>
                    <?php echo $form->textField($model, 'newPassword',array('class' => "form-control")); ?>
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
                            , array('success' => 'js:fnSuccess', 'error' => 'js:fnError')
                            , array('class' => 'btn bg-olive btn-flat margin')
                    );
                    ?>

                </div>
            </div>
        </div>
        <div class="box-footer">
        <?php Yii::app()->user->ui->tbutton("Crear Usuario"); ?>
        </div>
<?php $this->endWidget(); ?>
    </div>
</div>