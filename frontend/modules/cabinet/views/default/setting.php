<?php
$this->title = 'Профиль пользователя:'.' '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Кабинет', 'url' => ['/cabinet']];
$this->params['breadcrumbs'][] = $model->name;
?>
<div class="user-form">
    <?php
        $form = \yii\bootstrap\ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data']
        ]);
    ?>

    <?=\yii\helpers\Html::img(\common\components\UserComponent::getUserImage(\Yii::$app->user->id), ['width' => 200]) ?>

    <?=$form->field($model,'name')->textInput(['autofocus' => true]) ?>
    <?=$form->field($model,'username') ?>
    <?=$form->field($model,'email') ?>
    <?=\yii\helpers\Html::label('Avatar') ?>
    <?=\yii\helpers\Html::fileInput('avatar') ?>

    <div class="row">
        <div class="col-lg-4 col-sm-4 col-xs-4">
            <?= \yii\helpers\Html::a('Изменить пароль', ['/cabinet/default/change-password'], ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
        <div class="col-lg-4 col-lg-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4">
            <?= \yii\helpers\Html::submitButton('Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
    <?php \yii\bootstrap\ActiveForm::end() ?>
    <br>
    <br>
</div>
