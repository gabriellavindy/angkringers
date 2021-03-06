<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\Angkringan;

$list_angkringan = ArrayHelper::map(Angkringan::find()->asArray()->all(), 'id', 'nama');

/* @var $this yii\web\View */
/* @var $model app\models\AuthRule */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Form Komentar';
$this->params['breadcrumbs'][] = ['label' => 'Komentar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-rule-create">

    <h1><?= Html::encode($this->title) ?></h1>
	<div class="auth-rule-form">

	    <?php $form = ActiveForm::begin(); ?>

		<?=$form->field($model, 'id_angkringan')->dropDownList(
            $list_angkringan,           
            ['prompt'=>'--Pilih Angkringan--']   
        );?>

	    <?= $form->field($model, 'komentar')->textarea(['rows' => 3]) ?>
	    
	    <div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>

	    <?php ActiveForm::end(); ?>

	</div>
</div>

