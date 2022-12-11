<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Beneficiario $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="beneficiario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rfc')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'estatus')->checkbox() ?>

    <?= $form->field($model, 'idUsuarioCrea')->textInput() ?>

    <?= $form->field($model, 'fechaCrea')->textInput() ?>

    <?= $form->field($model, 'idUsuarioModifica')->textInput() ?>

    <?= $form->field($model, 'fechaModifica')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
