<?php

class CodeudorController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
     public function filters()
        {
           return array(array('CrugeAccessControlFilter'));
        }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }
    /**
     * este metodo listara los clientes en la tabla de clientes, con excepcion de un usuario que se le envie, en caso de no enviar listara todos
     * @author Oskar <oscarmesa.elpoli@gmail.com>
     */
    public function actionListarClientes(){
        $dataReturn = array();
        $t = 0;
        $clientes = Vcliente::model()->findAll(array('condition' => 'cedula != ? AND nombre_completo LIKE ?', 'params' => array(($model->cedula_codeudor != null ? $model->cedula_codeudor : 0), ("'%".$_REQUEST['term']."%'"))));
//                '', '
        foreach ($clientes as $cliente) {
            $dataReturn[] = array('id'=>$cliente->cedula,'text'=>$cliente->nombre_completo);
        }
        
//        if(count($dataReturn) == 0)
//        {
//            $dataReturn[] = array('id' => 0, 'text' => 'No se encontraron resultados.');
//        }
        
        echo json_encode(array('results'=>$dataReturn,'total' => $t));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Codeudor;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);
//        print_r($_REQUEST);die;
        if (isset($_POST['Codeudor'])) {
            $model->attributes = $_POST['Codeudor'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['Codeudor'])) {
            $model->attributes = $_POST['Codeudor'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
// we only allow deletion via POST request
            $this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Codeudor');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Codeudor('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Codeudor']))
            $model->attributes = $_GET['Codeudor'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Codeudor::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'codeudor-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
