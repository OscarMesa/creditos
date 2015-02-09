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

class UserMenu extends CWidget
{
    public $title;
    public function init()
    {
//        $this->title=CHtml::encode(Yii::app()->user->name);
        parent::init();
    }
    
    public function run()
    {
        $this->renderContent();
    }


    protected function renderContent()
    {
       $this->render('userMenu');
    }
}