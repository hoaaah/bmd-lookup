<?php

namespace app\controllers;

use Yii;
use app\models\TaKibBR;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KibBrController implements the CRUD actions for TaKibBR model.
 */
class KibBrController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all TaKibBR models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => TaKibBR::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TaKibBR model.
     * @param string $IDPemda
     * @param integer $Kd_Id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IDPemda, $Kd_Id)
    {
        return $this->render('view', [
            'model' => $this->findModel($IDPemda, $Kd_Id),
        ]);
    }

    /**
     * Creates a new TaKibBR model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TaKibBR();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IDPemda' => $model->IDPemda, 'Kd_Id' => $model->Kd_Id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TaKibBR model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $IDPemda
     * @param integer $Kd_Id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IDPemda, $Kd_Id)
    {
        $model = $this->findModel($IDPemda, $Kd_Id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IDPemda' => $model->IDPemda, 'Kd_Id' => $model->Kd_Id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TaKibBR model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $IDPemda
     * @param integer $Kd_Id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IDPemda, $Kd_Id)
    {
        $this->findModel($IDPemda, $Kd_Id)->delete();

        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * Finds the TaKibBR model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $IDPemda
     * @param integer $Kd_Id
     * @return TaKibBR the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IDPemda, $Kd_Id)
    {
        if (($model = TaKibBR::findOne(['IDPemda' => $IDPemda, 'Kd_Id' => $Kd_Id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
