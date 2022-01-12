<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cuti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'karyawan_id')->textInput() ?>

    <?= $form->field($model, 'tanggal_cuti')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
