<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Beneficiario $model */

$this->title = 'Update Beneficiario: ' . $model->idBeneficiario;
$this->params['breadcrumbs'][] = ['label' => 'Beneficiarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idBeneficiario, 'url' => ['view', 'idBeneficiario' => $model->idBeneficiario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="beneficiario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
