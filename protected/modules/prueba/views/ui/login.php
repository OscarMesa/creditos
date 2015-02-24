<?php 
$baseUrl = Yii::app()->baseUrl;
        $cs = Yii::app()->getClientScript();
        $cs->registerCssFile($baseUrl . '/themes/credito/plugins/iCheck/square/blue.css');
                
        $cs->registerScriptFile($baseUrl . '/themes/credito/plugins/iCheck/icheck.min.js', CClientScript::POS_END);
        $cs->registerScript('iCheck',
                "
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    "
                , CClientScript::POS_END);
?>


<section class="login-box">
    <div class="login-logo">
        <h1><?php echo CrugeTranslator::t('logon', "Login"); ?></h1>
    </div>

    <?php if (Yii::app()->user->hasFlash('loginflash')): ?>
        <div class="flash-error">
            <?php echo Yii::app()->user->getFlash('loginflash'); ?>
        </div>
    <?php else: ?>
        <div class="login-box-body">
            <p class="login-box-msg">Ingresa los datos para iniciar sesión</p>
            
            <?php
            $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                'id' => 'logon-form',
                'enableClientValidation' => false,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
            ));
            ?>
            
            <?php echo $form->errorSummary($model); ?>
            
            <div class="form-group has-feedback">
                <?php echo $form->labelEx($model, 'username'); ?>
                <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="form-group has-feedback">
                <?php echo $form->labelEx($model, 'password'); ?>
                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php echo $form->error($model, 'password'); ?>
            </div>

            <div class="row">
                <div class="col-xs-7">
                    <div class="checkbox icheck">
                        <label>
                            <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                            <?php echo $form->checkBox($model, 'rememberMe',array('style'=>'position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);')); ?>
                            <ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                            </div>
                            <?php echo $model->getAttributeLabel('rememberMe'); ?>
                        </label>
                        <?php echo $form->error($model, 'rememberMe'); ?>
                    </div>
                </div>

                <div class="col-xs-5">
                    <?php Yii::app()->user->ui->tbutton(CrugeTranslator::t('logon', "Login"),array('class'=>'btn-block btn-flat')); ?>
                </div>
            </div>
                    <br/><?php echo Yii::app()->user->ui->passwordRecoveryLink; ?>
            <?php
                if (Yii::app()->user->um->getDefaultSystem()->getn('registrationonlogin') === 1)
                    echo "<br/>".Yii::app()->user->ui->registrationLink;
            ?>

            <?php
            //	si el componente CrugeConnector existe lo usa:
            //
		if (Yii::app()->getComponent('crugeconnector') != null) {
                if (Yii::app()->crugeconnector->hasEnabledClients) {
                    ?>
                    <div class='crugeconnector'>
                        <span><?php echo CrugeTranslator::t('logon', 'You also can login with'); ?>:</span>
                        <ul>
                            <?php
                            $cc = Yii::app()->crugeconnector;
                            foreach ($cc->enabledClients as $key => $config) {
                                $image = CHtml::image($cc->getClientDefaultImage($key));
                                echo "<li>" . CHtml::link($image, $cc->getClientLoginUrl($key)) . "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                <?php }
            }
            ?>


        <?php $this->endWidget(); ?>
        </div>
<?php endif; ?>
</section>