<?php

/**
 * This is the model class for table "referencias".
 *
 * The followings are the available columns in table 'referencias':
 * @property string $id
 * @property string $tipo_referencia
 * @property string $parentesco
 * @property string $nombres
 * @property string $celular
 * @property string $telefono
 * @property string $direccion
 * @property string $cliente
 *
 * The followings are the available model relations:
 * @property TipoReferencia $tipoReferencia
 * @property ParentescoReferencia $parentesco0
 * @property Cliente $cliente0
 */
class Referencias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'referencias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_referencia, nombres, cliente', 'required'),
			array('nombres', 'length', 'max'=>100),
			array('celular', 'length', 'max'=>20),
			array('telefono', 'length', 'max'=>15),
			array('direccion', 'length', 'max'=>30),
			array('parentesco', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tipo_referencia, parentesco, nombres, celular, telefono, direccion, cliente', 'safe', 'on'=>'search'),
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
			'tipoReferencia' => array(self::BELONGS_TO, 'TipoReferencia', 'tipo_referencia'),
			'parentesco0' => array(self::BELONGS_TO, 'ParentescoReferencia', 'parentesco'),
			'cliente0' => array(self::BELONGS_TO, 'Cliente', 'cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tipo_referencia' => 'Tipo Referencia',
			'parentesco' => 'Parentesco',
			'nombres' => 'Nombres',
			'celular' => 'Celular',
			'telefono' => 'Telefono',
			'direccion' => 'Direccion',
			'cliente' => 'Cliente',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('tipo_referencia',$this->tipo_referencia,true);
		$criteria->compare('parentesco',$this->parentesco,true);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('cliente',$this->cliente,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Referencias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
