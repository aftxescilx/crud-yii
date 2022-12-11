<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Beneficiario $model */

$this->title = 'Create Beneficiario';
$this->params['breadcrumbs'][] = ['label' => 'Beneficiarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="beneficiario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
