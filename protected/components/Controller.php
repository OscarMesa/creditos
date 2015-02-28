<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
        
        /**
         * Titulo que lleva la pagina en el h1
         * @author Oskar <oscarmesa.elpoli@gmail.com>
         */
        public  $titlePage = "";
        
        /**
         * Con esta variable se busca determinar si el layout incluye bootstrap ( el que se inculye en yii). Se quito del preload, ya que algunas secciones no se necesita que cargue.
         * @var boolan 
         */
        public $isBootstrap = true; 
        
        
        public function init() {
            parent::init();
            if($this->isBootstrap)
                Yii::import('ext.bootstrap.components.Bootstrap');
        }
        
}