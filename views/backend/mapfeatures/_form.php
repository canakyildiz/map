<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\map\models\Mapfeatures */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mapfeatures-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mapId')->textInput(['readOnly' => true]) ?>

    <?= $form->field($model, 'coordinate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tag')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>