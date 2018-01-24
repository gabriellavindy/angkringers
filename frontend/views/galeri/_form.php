<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Angkringan;

$list_angkringan = ArrayHelper::map(Angkringan::find()->asArray()->all(), 'id', 'nama');
/* @var $this yii\web\View */
/* @var $model app\models\AuthRule */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Form Galeri';
$this->params['breadcrumbs'][] = ['label' => 'Galeri', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-rule-create">

    <h1><?= Html::encode($this->title) ?></h1>
	<div class="auth-rule-form">

	    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

		<?=$form->field($model, 'id_angkringan')->dropDownList(
            $list_angkringan,           
            ['prompt'=>'--Pilih Angkringan--']   
        );?>

	    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

	    <?= $form->field($model, 'harga')->textInput(['maxlength' => true]) ?>
	    
   		<?= $form->field($model, 'gambar')->fileInput() ?>
	    <div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>

	    <?php ActiveForm::end(); ?>

	</div>
</div>

