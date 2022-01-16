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

    <?php
        $queryKaryawan = (new \app\models\Karyawan())->find()->orderBy(['nama'=> SORT_ASC])->all();

        $dataKaryawan = \yii\helpers\ArrayHelper::map($queryKaryawan, 'id', 'nama');

        echo $form->field($model, 'karyawan_id')->dropDownList($dataKaryawan, [
            'prompt'=>'--Pilih Karyawan--'
        ])->label('Karyawan');
    ?>

    <?= $form->field($model, 'jumlah_gaji')->textInput() ?>

    <?= $form->field($model, 'jumlah_lembur')->textInput() ?>

    <?= $form->field($model, 'potongan')->textInput() ?>

    <?= $form->field($model, 'total_gaji_diterima')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
