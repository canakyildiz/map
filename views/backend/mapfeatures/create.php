<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\map\models\Mapfeatures */

$this->title = 'Create Mapfeatures';
$this->params['breadcrumbs'][] = ['label' => 'Mapfeatures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mapfeatures-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $model->mapId = Yii::$app->session['viewMapId']; ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
