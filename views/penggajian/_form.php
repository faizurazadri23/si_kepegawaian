<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Penggajian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penggajian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'karyawan_id')->textInput() ?>

    <?= $form->field($model, 'jumlah_gaji')->textInput() ?>

    <?= $form->field($model, 'jumlah_lembur')->textInput() ?>

    <?= $form->field($model, 'potongan')->textInput() ?>

    <?= $form->field($model, 'total_gaji_diterima')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
