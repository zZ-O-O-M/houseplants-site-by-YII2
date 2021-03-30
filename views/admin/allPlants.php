<?php
/* @var $plantsInfo array */ ?>

<div class="container">
  <div class="plants-list col-12 align-content-center">
    <h1 class="text-center">Список всех растений</h1>
     <? foreach ($plantsInfo as $plant): ?>
       <div style="margin-bottom: 15px" class="list-item">
         <a class="media plants-list__item" href="admin/edit-plant/<?= $plant['id'] ?>">
           <div class="row justify-content-md-center">
             <div class="plants-list__img">
               <img src="images/1.png" alt="">
             </div>
             <div class="media-body">
               <h5 class="mt-0"><?= $plant['name'] ?></h5>
               <p><?= $plant['requirements'] ?></p>
             </div>
           </div>
         </a>
         <div class="list-item__buttons">
           <div class="list-item__button">
             <a href="admin/delete-plant/<?= $plant['id'] ?>" class="btn-danger">Удалить</a>
           </div>
           <div class="list-item__button">
             <a href="admin/edit-plant/<?= $plant['id'] ?>" class="btn-success">Изменить</a>
           </div>
         </div>
       </div>
     <? endforeach; ?>
  </div>
</div>
