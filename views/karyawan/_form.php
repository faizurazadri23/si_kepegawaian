<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Karyawan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="karyawan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'pria' => 'Pria', 'wanita' => 'Wanita', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(), [
    //'language' => 'ru',
    'dateFormat' => 'yyyy-MM-dd',
]) ?>

    <?= $form->field($model, 'telpon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_nikah')->dropDownList([ 'belum nikah' => 'Belum nikah', 'nikah' => 'Nikah', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?php
        $querySupplier = (new \app\models\Golongan())->find()->orderBy(['nama_golongan'=> SORT_ASC])->all();

        $dataKaryawan = \yii\helpers\ArrayHelper::map($querySupplier, 'id', 'nama_golongan');

        echo $form->field($model, 'golongan_id')->dropDownList($dataKaryawan, [
            'prompt'=>'--Pilih Golongan--'
        ])->label('Golongan');
    ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
