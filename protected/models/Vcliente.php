<?php

/**
 * This is the model class for table "v_cliente".
 *
 * The followings are the available columns in table 'v_cliente':
 * @property string $cedula
 * @property string $nombres
 * @property string $apellidos
 * @property string $telefono
 * @property string $correo
 * @property string $celular
 * @property string $direccion
 * @property boolean $solo_codeudor
 * @property string $estado_cliente
 * @property string $pension
 * @property string $tp_vinculacion_eps
 * @property string $eps
 * @property string $nombre_completo
 */
class Vcliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'v_cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombres, apellidos', 'length', 'max'=>80),
			array('telefono, celular', 'length', 'max'=>30),
			array('correo, direccion', 'length', 'max'=>50),
			array('cedula, solo_codeudor, estado_cliente, pension, tp_vinculacion_eps, eps, nombre_completo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cedula, nombres, apellidos, telefono, correo, celular, direccion, solo_codeudor, estado_cliente, pension, tp_vinculacion_eps, eps, nombre_completo', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cedula' => 'Cedula',
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'telefono' => 'Telefono',
			'correo' => 'Correo',
			'celular' => 'Celular',
			'direccion' => 'Direccion',
			'solo_codeudor' => 'Solo Codeudor',
			'estado_cliente' => 'Estado Cliente',
			'pension' => 'Pension',
			'tp_vinculacion_eps' => 'Tp Vinculacion Eps',
			'eps' => 'Eps',
			'nombre_completo' => 'Nombre Completo',
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

		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('solo_codeudor',$this->solo_codeudor);
		$criteria->compare('estado_cliente',$this->estado_cliente,true);
		$criteria->compare('pension',$this->pension,true);
		$criteria->compare('tp_vinculacion_eps',$this->tp_vinculacion_eps,true);
		$criteria->compare('eps',$this->eps,true);
		$criteria->compare('nombre_completo',$this->nombre_completo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vcliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
