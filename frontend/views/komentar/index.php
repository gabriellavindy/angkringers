<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthRuleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Komentar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-rule-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Komentar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'header' => 'No'],

            [
                'attribute' => 'id_user',
                'value'     => 'idUser.nama',
            ],
            [
                'attribute' => 'id_angkringan',
                'value'     => 'idAngkringan.nama',
            ],
            'komentar',
            [
                'class' => 'yii\grid\ActionColumn', 
                'contentOptions' => ["style"=>"text-align:center;white-space:nowrap;"],
                'header' => 'Aksi'
            ],
        ],
    ]); ?>

</div>
