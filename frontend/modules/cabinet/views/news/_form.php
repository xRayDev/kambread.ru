<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'description')->widget(\yii\redactor\widgets\Redactor::className()) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <div class="row">
            <div class="col-lg-3">
                <?= Html::submitButton($model->isNewRecord ? 'Добавить изображение' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
            <?php if (!$model->isNewRecord) { ?>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                    <p>
                        <?= Html::a('Изображения', ['addimg', 'id' => $model->idnews], [
                            'class' => 'btn btn-warning'
                        ]) ?>
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>