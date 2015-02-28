
<div class='auth-item-create-button'>
    <?php echo CHtml::link("<i class='icon fa fa-user' style='margin-right: 6px;'></i>".CrugeTranslator::t("Crear Nuevo Rol")
            , Yii::app()->user->ui->getRbacAuthItemCreateUrl(CAuthItem::TYPE_ROLE)
            , array('class'=>'btn bg-olive btn-flat margin'));
    ?>
</div>

<?php $this->renderPartial('_listauthitems', array('dataProvider' => $dataProvider), false); ?>