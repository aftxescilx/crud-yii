<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Beneficiario $model */

$this->title = $model->idBeneficiario;
$this->params['breadcrumbs'][] = ['label' => 'Beneficiarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="beneficiario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idBeneficiario' => $model->idBeneficiario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idBeneficiario' => $model->idBeneficiario], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idBeneficiario',
            'nombre',
            'rfc',
            'estatus:boolean',
            'idUsuarioCrea',
            'fechaCrea',
            'idUsuarioModifica',
            'fechaModifica',
        ],
    ]) ?>

</div>
