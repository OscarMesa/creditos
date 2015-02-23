<?php

/**
 * This is the model class for table "menu".
 *
 * The followings are the available columns in table 'menu':
 * @property string $id_menu
 * @property string $nombre
 * @property string $padre
 * @property string $href
 * @property string $class
 * @property string $glycons
 * @property string $controlador
 * @property string $accion
 * @property string $orden
 * @property string $esLabel
 *
 * The followings are the available model relations:
 * @property Menu $idMenu
 * @property Menu $menu
 */
class Menu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'menu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre', 'required'),
			array('nombre, controlador, accion', 'length', 'max'=>100),
			array('href, class', 'length', 'max'=>255),
			array('glycons', 'length', 'max'=>50),
			array('padre, orden, esLabel', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_menu, nombre, padre, href, class, glycons, controlador, accion, orden, esLabel', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idMenu' => array(self::BELONGS_TO, 'Menu', 'id_menu'),
			'menu' => array(self::HAS_MANY, 'Menu', 'padre'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_menu' => 'Id Menu',
			'nombre' => 'Nombre',
			'padre' => 'Padre',
			'href' => 'Href',
			'class' => 'Class',
			'glycons' => 'Glycons',
			'controlador' => 'Controlador',
			'accion' => 'Accion',
			'orden' => 'Orden',
			'esLabel' => 'Es Label',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_menu',$this->id_menu,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('padre',$this->padre,true);
		$criteria->compare('href',$this->href,true);
		$criteria->compare('class',$this->class,true);
		$criteria->compare('glycons',$this->glycons,true);
		$criteria->compare('controlador',$this->controlador,true);
		$criteria->compare('accion',$this->accion,true);
		$criteria->compare('orden',$this->orden,true);
		$criteria->compare('esLabel',$this->esLabel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Menu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
