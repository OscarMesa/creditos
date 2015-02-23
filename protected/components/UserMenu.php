<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserMenu
 *
 * @author oskar
 */
class UserMenu extends CWidget {

    public $title;

    public function init() {
//        $this->title=CHtml::encode(Yii::app()->user->name);
        parent::init();
    }

    public function run() {
        $this->renderContent();
    }

    protected function renderContent() {
        $this->render('userMenu');
    }

    /**
     * Construye una seccion del menu
     * @param Menu $menu Sección del menu
     */
    public function crearSeccionMenu($menu) {
        echo '<li class="' . $menu->class . ' '.(strtolower(Yii::app()->controller->id) == strtolower($menu->controlador)?'active':'').'">';
        echo '<a href="#">
                    <i class="' . $menu->glycons . '"></i> <span>' . $menu->nombre . '</span> <i class="fa fa-angle-left pull-right"></i>
                </a>';
        echo '<ul class="treeview-menu">';
        /**
         * @param Menu $M_hijo Menu hijo
         */
        foreach ($menu->menu as $M_hijo) {
            if ($M_hijo->padre != 0) {
                if($M_hijo->esLabel == 1)
                    echo '<li class="'.$M_hijo->class.'">'.$M_hijo->nombre.'</li>';
                else
                    echo '<li><a href="' . Yii::app()->createAbsoluteUrl($M_hijo->href) . '"><i class="' . $M_hijo->glycons . '"></i>' . $M_hijo->nombre . '</a></li>';
            } else {
             //   $this->crearSeccionMenu($M_hijo);
            }
        }
        echo '</ul>';
        echo '</li>';
    }

}
