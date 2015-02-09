<?php

/**
 * This is the model class for table "informacion_laboral".
 *
 * The followings are the available columns in table 'informacion_laboral':
 * @property string $id
 * @property string $cliente
 * @property string $nombre_compañia
 * @property string $direccion
 * @property string $telefono
 * @property string $celular
 * @property string $cargo
 * @property double $salario
 * @property string $tiempo_laborado
 * @property string $contrato
 *
 * The followings are the available model relations:
 * @property Cliente $cliente0
 * @property Cargos $cargo0
 */
class InformacionLaboral extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'informacion_laboral';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cliente, nombre_compañia, cargo', 'required'),
			array('salario', 'numerical'),
			array('nombre_compañia', 'length', 'max'=>100),
			array('direccion, telefono, celular', 'length', 'max'=>80),
			array('tiempo_laborado, contrato', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cliente, nombre_compañia, direccion, telefono, celular, cargo, salario, tiempo_laborado, contrato', 'safe', 'on'=>'search'),
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
			'cliente0' => array(self::BELONGS_TO, 'Cliente', 'cliente'),
			'cargo0' => array(self::BELONGS_TO, 'Cargos', 'cargo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cliente' => 'Cliente',
			'nombre_compañia' => 'Nombre Compañia',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'celular' => 'Celular',
			'cargo' => 'Cargo',
			'salario' => 'Salario',
			'tiempo_laborado' => 'Tiempo Laborado',
			'contrato' => 'Contrato',
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
		$criteria->compare('cliente',$this->cliente,true);
		$criteria->compare('nombre_compañia',$this->nombre_compañia,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('salario',$this->salario);
		$criteria->compare('tiempo_laborado',$this->tiempo_laborado,true);
		$criteria->compare('contrato',$this->contrato,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InformacionLaboral the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
