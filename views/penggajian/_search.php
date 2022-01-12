<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenggajianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penggajian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'karyawan_id') ?>

    <?= $form->field($model, 'jumlah_gaji') ?>

    <?php // echo $form->field($model, 'jumlah_lembur') ?>

    <?php // echo $form->field($model, 'potongan') ?>

    <?php // echo $form->field($model, 'total_gaji_diterima') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
