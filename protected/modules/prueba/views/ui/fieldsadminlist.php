<article class="col-xs-12">  
    <div class="box">
        <div class="box-header">
            <div class="box-title">
                Listado de campos personalizados durante el registro.<br/>
            </div>
        </div>
        <div class="box-body">
            <?php echo Yii::app()->user->ui->getFieldAdminCreateLink(CrugeTranslator::t("Crear un nuevo Campo Personalizado"), array('class' => "btn bg-olive btn-flat margin")); ?>
            <?php
            $cols = array();
            // presenta los campos de ICrugeField
            foreach (Yii::app()->user->um->getSortFieldNamesForICrugeField() as $key => $fieldName) {
                $value = null;
                if ($fieldName == 'required')
                    $value = '$data->getRequiredName()';
                $cols[] = array('name' => $fieldName, 'value' => $value);
            }
            $cols[] = array(
                'class' => 'CButtonColumn',
                'template' => '{update} {delete}',
                'deleteConfirmation' => CrugeTranslator::t("Esta seguro de eliminar este campo ?"),
                'buttons' => array(
                    'update' => array(
                        'label' => CrugeTranslator::t("editar campo"),
                        'url' => 'array("fieldsadminupdate","id"=>$data->getPrimaryKey())'
                    ),
                    'delete' => array(
                        'label' => CrugeTranslator::t("eliminar campo"),
                        'url' => 'array("fieldsadmindelete","id"=>$data->getPrimaryKey())'
                    ),
                ),
            );
            $this->widget(Yii::app()->user->ui->CGridViewClass, array(
                'dataProvider' => $dataProvider,
                'columns' => $cols,
                'filter' => $model,
                'itemsCssClass' => 'table table-bordered table-hover dataTable',
            ));
            ?>
        </div>
    </div>
</article>