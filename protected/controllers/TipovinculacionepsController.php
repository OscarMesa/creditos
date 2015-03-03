<?php

class TipoVinculacionEpsController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(array('CrugeAccessControlFilter'));
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array();
    }

    /**
     * este metodo se encarga de retornar los tipos de vinculaciones que puede tener un cliente con una EPS. 
     * @author Oskar<oscarmesa.elpoli@gmail.com>
     */
    public function actionListarTpVincEPSAjax() {
        $result = array();
        $_REQUEST['term'] = strtolower($_REQUEST['term']);
        if ($_REQUEST['tpv'] != 0) {
            $tpVinculacionEPS = TipoVinculacionEps::model()->find(array(
                'condition' => 'id =  ?',
                'params' => array(
                    $_REQUEST['tpv']
                )
            ));
            echo CJSON::encode(array('id' => $tpVinculacionEPS->id, 'text' => $tpVinculacionEPS->descripcion));
        } else {
            $tpVinculacionEPSs = TipoVinculacionEps::model()->findAll(array(
                'condition' => 'LOWER(descripcion) LIKE ?',
                'params' => array(
                    '%' . $_REQUEST['term'] . '%'
                ),
                'limit' => 10
            ));
            foreach ($tpVinculacionEPSs as $tpVinculacionEPS) {
                $result[] = array('id' => $tpVinculacionEPS->id, 'text' => $tpVinculacionEPS->descripcion);
            }
            echo CJSON::encode(array('results' => $result));
        }
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
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new TipoVinculacionEps;
        $this->titlePage = "Crear Tipo de Vinculación";
// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['TipoVinculacionEps'])) {
            $model->attributes = $_POST['TipoVinculacionEps'];
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
        $this->titlePage = "Actualizar Tipo de vinculación  #$model->id";
// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['TipoVinculacionEps'])) {
            $model->attributes = $_POST['TipoVinculacionEps'];
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
        $dataProvider = new CActiveDataProvider('TipoVinculacionEps');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new TipoVinculacionEps('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['TipoVinculacionEps']))
            $model->attributes = $_GET['TipoVinculacionEps'];

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
        $model = TipoVinculacionEps::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tipo-vinculacion-eps-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
