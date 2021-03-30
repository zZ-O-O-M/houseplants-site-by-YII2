<?php
/* @var $plantsInfo array */
?>
<div class="container">
  <div class="plants-list col-12 align-content-center">
    <h1 class="text-center">Список всех растений</h1>
     <? foreach ($plantsInfo as $plant): ?>
       <div style="margin-bottom: 15px" class="list-item">
         <a class="media plants-list__item" href="admin-plant.html">
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
       </div>
     <? endforeach; ?>
  </div>
</div>