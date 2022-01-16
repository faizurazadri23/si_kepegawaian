<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KaryawanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="karyawan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="container">
        <div class="row">

    
            <div class="col-md-2">
                <?= $form->field($model, 'nip') ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'nik') ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'nama') ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'jenis_kelamin') ?>
            </div>

            </div>
        <div>
    </div>


    


    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'telpon') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'status_nikah') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'golongan_id') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>
    <br

    <?php ActiveForm::end(); ?>

</div>
