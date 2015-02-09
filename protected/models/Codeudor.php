<?php

/**
 * This is the model class for table "codeudor".
 *
 * The followings are the available columns in table 'codeudor':
 * @property string $cedula_cliente
 * @property string $cedula_codeudor
 *
 * The followings are the available model relations:
 * @property Cliente $cedulaCliente
 * @property Cliente $cedulaCodeudor
 */
class Codeudor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'codeudor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_cliente, cedula_codeudor', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cedula_cliente, cedula_codeudor', 'safe', 'on'=>'search'),
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
			'cedulaCliente' => array(self::BELONGS_TO, 'Cliente', 'cedula_cliente'),
			'cedulaCodeudor' => array(self::BELONGS_TO, 'Cliente', 'cedula_codeudor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cedula_cliente' => 'Cedula Cliente',
			'cedula_codeudor' => 'Cedula Codeudor',
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

		$criteria->compare('cedula_cliente',$this->cedula_cliente,true);
		$criteria->compare('cedula_codeudor',$this->cedula_codeudor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Codeudor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
