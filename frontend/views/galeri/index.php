<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthRuleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galeri';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-rule-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if(!Yii::$app->user->isGuest) {?>
        <p>
            <?= Html::a('Tambah Galeri', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php } ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'header' => 'No'],

            'nama',
            [
                'attribute' => 'id_angkringan',
                'value'     => 'idAngkringan.nama',
            ],
            'harga',
            [
                'class' => 'yii\grid\ActionColumn', 
                'contentOptions' => ["style"=>"text-align:center;white-space:nowrap;"],
                'header' => 'Aksi',
                'visible' => Yii::$app->user->isAllowed('admin')
            ],
        ],
    ]); ?>

</div>
