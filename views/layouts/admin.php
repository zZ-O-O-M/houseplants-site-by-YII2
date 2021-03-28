<?php
/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\MyAsset;

use yii\helpers\Html;


MyAsset::register($this);
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
   <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="admin-index.html">Список всех растений</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Сделать заказ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.html">Вид пользователя</a>
      </li>
    </ul>
  </div>

  <!-- If user is logged in-->
  <div class="user-authorized hide">
    <div class="user-name">
      Рады вам: "Alex"
    </div>
    <div class="order-button">
      <a class="order-button__link" href="#">
        <!--        <img class="order-button__image" src="../images/basket.png" alt="">-->
      </a>
    </div>
    <div class="navbar-button logout-button">
      <a href="#">Выход</a>
    </div>
  </div>

  <!-- If the user is not logged in -->
  <div class="navbar-button login-button">
    <a href="../authorization.html">Войти</a>
  </div>
</nav>




<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
