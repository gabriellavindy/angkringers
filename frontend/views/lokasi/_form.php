<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AuthRule */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Form Lokasi';
$this->params['breadcrumbs'][] = ['label' => 'Lokasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-rule-create">

    <h1><?= Html::encode($this->title) ?></h1>
	<div class="auth-rule-form">

	    <?php $form = ActiveForm::begin(); ?>

	    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

	    <?= $form->field($model, 'nama_pemilik')->textInput(['maxlength' => true]) ?>

	    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

	    <?= $form->field($model, 'keterangan')->textarea(['rows' => 3]) ?>
	    
	    <div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>

	    <?php ActiveForm::end(); ?>

	</div>
</div>

