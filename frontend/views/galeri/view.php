<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AuthRule */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Galeri', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-rule-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah Anda yakin ingin menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama',
            'id_angkringan',
            'harga',
            [
                'attribute'=>'photo',
                'value' =>  Html::img(Yii::$app->request->baseUrl.'/file/'.$model->gambar, ['alt'=>$model->gambar, 'class'=>'thing', 'width' => '360px'], ['site/zoom']),
                'format' => ['raw'],
            ],
        ],
    ]) ?>

</div>
