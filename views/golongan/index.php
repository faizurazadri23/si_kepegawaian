<?php

use app\models\Golongan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GolonganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Golongan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golongan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Golongan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_golongan',
            'gaji_pokok',
            'tunjangan_istri',
            'tunjangan_anak',
            'tunjangan_transport',
            'tunjangan_makan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Golongan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
