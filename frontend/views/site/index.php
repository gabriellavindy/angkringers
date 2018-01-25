<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use frontend\assets\AppAsset;
$this->title = 'Angkrings';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Angkringan Yogyakarta</h1>

        <p class="lead"></p>
    </div>

    <div class="body-content">

        <div class="row">
            <?php foreach($angkringan_list as $angkringan){ ?>
                <div class="col-lg-4">
                    <h2><?=$angkringan->nama?></h2>

                    <p><?=$angkringan->keterangan?></p>

                    <p><?=$angkringan->lokasi?></p>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-sm-12" style="text-align:center">
                <h2>GALERI</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach($makanan_list as $makanan){ ?>
                <div class="col-lg-4">
                    <?= Html::img(Yii::$app->request->baseUrl.'/file/'.$makanan->gambar, ['alt'=>$makanan->gambar, 'class'=>'thing', 'width' => '360px']);?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
