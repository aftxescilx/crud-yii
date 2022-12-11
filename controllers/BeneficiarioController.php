<?php

namespace app\controllers;

use app\models\Beneficiario;
use app\models\BeneficiarioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BeneficiarioController implements the CRUD actions for Beneficiario model.
 */
class BeneficiarioController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Beneficiario models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BeneficiarioSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Beneficiario model.
     * @param int $idBeneficiario Id Beneficiario
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idBeneficiario)
    {
        return $this->render('view', [
            'model' => $this->findModel($idBeneficiario),
        ]);
    }

    /**
     * Creates a new Beneficiario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Beneficiario();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idBeneficiario' => $model->idBeneficiario]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Beneficiario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idBeneficiario Id Beneficiario
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idBeneficiario)
    {
        $model = $this->findModel($idBeneficiario);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idBeneficiario' => $model->idBeneficiario]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Beneficiario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idBeneficiario Id Beneficiario
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idBeneficiario)
    {
        $this->findModel($idBeneficiario)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Beneficiario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idBeneficiario Id Beneficiario
     * @return Beneficiario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idBeneficiario)
    {
        if (($model = Beneficiario::findOne(['idBeneficiario' => $idBeneficiario])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
