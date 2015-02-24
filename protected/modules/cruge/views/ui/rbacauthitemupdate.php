<?php
	/*
		$model:  es una instancia que implementa a CrugeAuthItemEditor
	*/
	
?>
<section class="content-header">
<h1><?php echo ucwords(CrugeTranslator::t("editando")." ".CrugeTranslator::t($model->categoria));?></h1>
</section>
<?php $this->renderPartial('_authitemform',array('model'=>$model),false);?>