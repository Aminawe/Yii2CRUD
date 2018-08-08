<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'name'); ?>
    <?= $form->field($model, 'username'); ?>
    <?= $form->field($model, 'password'); ?>
    <?= $form->field($model, 'email'); ?>
    <?= $form->field($model, 'mobile'); ?>
    <?= $form->field($model, 'gender'); ?>

    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>

<?php ActiveForm::end(); ?>
