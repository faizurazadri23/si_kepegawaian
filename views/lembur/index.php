<?php

use app\models\Lembur;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LemburSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lembur';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lembur-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lembur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'karyawan_id',
                'label'     => 'Karyawan',
                'value'     => function($model){
                    return $model->karyawan->nama;
                }
            ],
            'tanggal_lembur',
            [
                'attribute' => 'jumlah',
                'label'     => 'Jumlah Jam Lembur',
                'value'     => 'jumlah'
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Lembur $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
