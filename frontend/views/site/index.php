<?php
/* @var $this yii\web\View */
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
    </div>
</div>
