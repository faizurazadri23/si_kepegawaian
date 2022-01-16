<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CutiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="container">
        <div class="row">
 
            <div class="col-md-3">
                <?= $form->field($model, 'karyawan_id') ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'tanggal_cuti') ?>
            </div>

            <div class="col-md-2">
                <?= $form->field($model, 'jumlah') ?>
            </div>
        </div>

    </div>

    

    

    

    

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
