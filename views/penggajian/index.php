<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenggajianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penggajians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penggajian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penggajian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tanggal',
            'keterangan:ntext',
            'karyawan_id',
            'jumlah_gaji',
            //'jumlah_lembur',
            //'potongan',
            //'total_gaji_diterima',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Penggajian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
