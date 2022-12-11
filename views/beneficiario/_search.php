<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BeneficiarioSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="beneficiario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idBeneficiario') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'rfc') ?>

    <!-- <?= $form->field($model, 'estatus')->checkbox() ?>

    <?= $form->field($model, 'idUsuarioCrea') ?> -->

    <?php // echo $form->field($model, 'fechaCrea') ?>

    <?php // echo $form->field($model, 'idUsuarioModifica') ?>

    <?php // echo $form->field($model, 'fechaModifica') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
