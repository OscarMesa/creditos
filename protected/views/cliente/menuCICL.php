<ul class="nav nav-tabs" style="margin-left: 10px">
    <li role="presentation" class="<?php echo strtolower(Yii::app()->controller->id) == 'cliente' ? 'active':'';?>"><a href="<?php echo Yii::app()->createAbsoluteUrl('cliente/create'); ?>">Información cliente</a></li>
    <li role="presentation" class="<?php echo strtolower(Yii::app()->controller->id) == 'informacionlaboral' ? 'active':'';?>"><a href="<?php echo Yii::app()->createAbsoluteUrl('informacionLaboral/create'); ?>">Información Laboral</a></li>
    <li role="presentation" class="<?php echo strtolower(Yii::app()->controller->id) == 'codeudor' ? 'active':'';?>"><a href="<?php echo Yii::app()->createAbsoluteUrl('codeudor/create'); ?>">Co-Deudor</a></li>
    <li role="presentation" class="<?php echo strtolower(Yii::app()->controller->id) == 'referencias' ? 'active':'';?>"><a href="<?php echo Yii::app()->createAbsoluteUrl('referencias/create'); ?>">Referencias</a></li>
</ul>
