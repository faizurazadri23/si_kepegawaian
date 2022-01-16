<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Cuti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        $queryKaryawan = (new \app\models\Karyawan())->find()->orderBy(['nama'=> SORT_ASC])->all();

        $dataKaryawan = \yii\helpers\ArrayHelper::map($queryKaryawan, 'id', 'nama');

        echo $form->field($model, 'karyawan_id')->dropDownList($dataKaryawan, [
            'prompt'=>'--Pilih Karyawan--'
        ])->label('karyawan');
    ?>

    <?= $form->field($model, 'tanggal_cuti')->widget(DatePicker::classname(), [
        //'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>
    <?= $form->field($model, 'jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
