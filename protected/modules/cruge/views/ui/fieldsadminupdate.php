<?php
/*
  $model:  es una instancia que implementa a ICrugeField
 */
?>

<div class="">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'crugefield-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => false,
    ));
    ?>
    <div class="col-md-10">
        <div class="box box-primary">
            <div class="box-header"><h3><?php echo ucfirst(CrugeTranslator::t("datos del campo")); ?></h3></div>
            <div class="box-body">
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'fieldname'); ?>
                    <?php echo $form->textField($model, 'fieldname', array('size' => 15, 'maxlength' => 20, 'class' => "form-control")); ?>
                    <?php echo $form->error($model, 'fieldname'); ?>
                </div>
                <div class='form-group'>
                    <?php echo $form->labelEx($model, 'longname'); ?>
                    <?php echo $form->textField($model, 'longname', array('class' => "form-control")); ?>
                    <?php echo $form->error($model, 'longname'); ?>
                </div>
                <div class='form-group'>
                    <?php echo $form->labelEx($model, 'position'); ?>
                    <?php echo $form->textField($model, 'position', array('size' => 5, 'maxlength' => 3, 'class' => "form-control")); ?>
                    <?php echo $form->error($model, 'position'); ?>
                </div>
                <div class="form-group">
                    <div class='checkbox icheck'>
                        <label>
                            <?php echo $form->checkBox($model, 'required', array()); ?>
                            <?php echo $model->getAttributeLabel('required'); ?>
                        </label>
                        <?php echo $form->error($model, 'required'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class='checkbox icheck'>
                        <label>
                            <?php echo $form->checkBox($model, 'showinreports'); ?>
                            <?php echo $model->getAttributeLabel('showinreports'); ?>
                        </label>
                        <?php echo $form->error($model, 'showinreports'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10">
        <div class="box box-success">
            <div class="box-header"><h3><?php echo ucfirst(CrugeTranslator::t("datos del contenido")); ?></h3></div>

            <div class="box-body">
                <div class='form-group'>
                    <?php echo $form->labelEx($model, 'fieldtype'); ?>
                    <?php
                    echo $form->dropDownList($model, 'fieldtype'
                            , Yii::app()->user->um->getFieldTypeOptions(), array('class' => 'form-control'));
                    ?>
                    <?php echo $form->error($model, 'fieldtype'); ?>
                </div>
                <div class='form-group'>
                    <?php echo $form->labelEx($model, 'fieldsize'); ?>
                    <?php echo $form->textField($model, 'fieldsize', array('size' => 5, 'maxlength' => 3, 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'fieldsize'); ?>
                </div>
                <div class='form-group'>
                    <?php echo $form->labelEx($model, 'maxlength'); ?>
                    <?php echo $form->textField($model, 'maxlength', array('size' => 8, 'maxlength' => 20, 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'maxlength'); ?>
                    <i><?php echo CrugeTranslator::t("maxlength = -1 causa que no se valide el tamano de este campo"); ?></i>
                </div>

                <div class='form-group'>
                    <?php echo $form->labelEx($model, 'predetvalue'); ?>
                    <?php echo $form->textArea($model, 'predetvalue', array('rows' => 5, 'cols' => 40, 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'predetvalue'); ?>
                    <p class='hint'><?php
                        echo CrugeTranslator::t(
                                "si el fieldtype es un Listbox ponga aqui las opciones una por cada linea,
 el valor coloquelo al inicio seguido de una coma, ejemplo:
 <ul style='list-style: none;'>
 <li>1, azul</li>
 <li>2, rojo</li>
 <li>3, verde</li>
 </ul>
"
                        );
                        ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10">
        <div class="box box-warning">
            <div class="box-header"><h3><?php echo ucfirst(CrugeTranslator::t("datos de validacion")); ?></h3></div>

            <div class="box-body">
                <div class='form-group'>
                    <?php echo $form->labelEx($model, 'useregexp'); ?>
                    <?php echo $form->textArea($model, 'useregexp', array('rows' => 5, 'cols' => 40, 'class' => "form-control")); ?>
                    <?php echo $form->error($model, 'useregexp'); ?>
                    <p class='hint'><?php echo CrugeTranslator::t("dejar en blanco si no se quiere usar"); ?></p>
                </div>
                <?php
                echo ucfirst(CrugeTranslator::t(
                                "La expresion regular (regexp) es una lista de caracteres
				 que validan la sintaxis de lo que el usuario ingrese en este campo.
				 por ejemplo:"
                ));
                ?>
                <?php
                echo "<br/><u>" . CrugeTranslator::t("telefono:") . "</u><br/>^([0-9-.+ \(\)]{3,20})$";
                echo "<br/><u>" . CrugeTranslator::t("digitos y letras:") . "</u><br/>^([a-zA-Z0-9]+)$";
                ?>

                <div class='form-group'>
                    <?php echo $form->labelEx($model, 'useregexpmsg'); ?>
                    <?php echo $form->textField($model, 'useregexpmsg', array('size' => 50, 'maxlength' => 512, 'class' => "form-control")); ?>
                    <?php echo $form->error($model, 'useregexpmsg'); ?>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <?php Yii::app()->user->ui->tbutton(($model->isNewRecord ? "Crear Campo" : "Actualizar Campo"), array('class' => "btn btn-primary")); ?>
        </div>
        <?php echo $form->errorSummary($model); ?>
        <?php $this->endWidget(); ?>
    </div>
</div>



