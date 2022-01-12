<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lembur */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lembur-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'karyawan_id')->textInput() ?>

    <?= $form->field($model, 'tanggal_lembur')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
