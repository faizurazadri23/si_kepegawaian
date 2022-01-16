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

    <div class="container">
        <div class="row">
 
            <div class="col-md-3">
                <?= $form->field($model, 'tanggal') ?>
            </div>

            <div class="col-md-3">
            <?= $form->field($model, 'keterangan') ?>
            </div>

            <div class="col-md-2">
                <?= $form->field($model, 'karyawan_id') ?>
            </div>

            <div class="col-md-2">
            <?= $form->field($model, 'jumlah_gaji') ?>
            </div>
        </div>

    </div>


    <?php // echo $form->field($model, 'jumlah_lembur') ?>

    <?php // echo $form->field($model, 'potongan') ?>

    <?php // echo $form->field($model, 'total_gaji_diterima') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
