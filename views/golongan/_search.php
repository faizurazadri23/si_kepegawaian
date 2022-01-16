<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GolonganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="golongan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="container">
        <div class="row">
 
            <div class="col-md-3">
                <?= $form->field($model, 'nama_golongan') ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'gaji_pokok') ?>

            </div>

            <div class="col-md-2">
                <?= $form->field($model, 'tunjangan_istri') ?>
            </div>

            <div class="col-md-2">
                <?= $form->field($model, 'tunjangan_anak') ?>
            </div>
        </div>

    </div>


    <?php // echo $form->field($model, 'tunjangan_transport') ?>

    <?php // echo $form->field($model, 'tunjangan_makan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
