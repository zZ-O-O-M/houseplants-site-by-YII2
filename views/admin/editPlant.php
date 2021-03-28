<?php

/* @var $plantTypes array */

/* @var $windowTypes array */

use yii\widgets\ActiveForm;
use yii\widgets\Pjax;


?>
<?php Pjax::begin() ?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
  <div class="alert alert-success alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times</span>
    </button>
     <?= Yii::$app->session->getFlash('success'); ?>
  </div>
<?php endif; ?>

<div class="container edit-plant-container">

  <div class="col-6 align-content-center">
    <div class="row justify-content-md-center plant-info">
      <!--        <img class="plant-info__img align-self-start" src="../images/1.png" alt="...">-->
       <?php $form = ActiveForm::begin([
          'id'      => 'edit-form',
          'options' => [
             'class'     => 'plant-edit-form',
             'data-pjax' => true
          ]
       ]) ?>

       <?= $form->field($model, 'name')->input('text',
          [
             'placeholder' => 'Введите наименование'
          ]) ?>
       <?= $form->field($model, 'plantType')->dropDownList($plantTypes) ?>
       <?= $form->field($model, 'windowType')->dropDownList([
           1 => '1',
           2 => '2',
           3 => '3'
       ]) ?>
       <?= $form->field($model, 'description')->textarea(
          [
             'placeholder' => 'Введите описание',
             'rows'        => 5
          ]) ?>

      <div class="form-group edit-plant-container__button-block">
        <button type="submit" class="btn btn-primary">Сохранить</button>
      </div>

       <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>
<?php Pjax::end(); ?>


