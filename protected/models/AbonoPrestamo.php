<?php

/**
 * This is the model class for table "abono_prestamo".
 *
 * The followings are the available columns in table 'abono_prestamo':
 * @property string $id
 * @property string $cliente
 * @property string $tipo_abono
 * @property double $valor_abono
 *
 * The followings are the available model relations:
 * @property Cliente $cliente0
 * @property TipoAbono $tipoAbono
 */
class AbonoPrestamo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'abono_prestamo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cliente, tipo_abono, valor_abono', 'required'),
			array('valor_abono', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cliente, tipo_abono, valor_abono', 'safe', 'on'=>'search'),
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
			'tipoAbono' => array(self::BELONGS_TO, 'TipoAbono', 'tipo_abono'),
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
			'tipo_abono' => 'Tipo Abono',
			'valor_abono' => 'Valor Abono',
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
		$criteria->compare('tipo_abono',$this->tipo_abono,true);
		$criteria->compare('valor_abono',$this->valor_abono);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AbonoPrestamo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
