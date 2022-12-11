<?php

use app\models\Beneficiario;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\BeneficiarioSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Beneficiarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="beneficiario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Beneficiario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idBeneficiario',
            'nombre',
            'rfc',
            // 'estatus:boolean',
            // 'idUsuarioCrea',
            //'fechaCrea',
            //'idUsuarioModifica',
            //'fechaModifica',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Beneficiario $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idBeneficiario' => $model->idBeneficiario]);
                 }
            ],
        ],
    ]); ?>


</div>
