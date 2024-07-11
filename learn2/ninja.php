<?php


 $ninjas = [
    "tim","todd",'jeffrey','jonah' 
  ];
 
 
  echo $ninjas[1] .'<br />';



  <div class="container">
      <div class="row">

         <?php foreach ($pizzas as $pizza) : ?>

            <div class="col s6 md3">
               <div class="card z-depth-0">
                  <div class="card-content center">
                     <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                     <ul class="black-text">
                        <?php foreach (explode(',', $pizza['ingredients']) as $ing) : ?>
                           <li><?php echo htmlspecialchars($ing); ?></li>
                        <?php endforeach; ?>
                     </ul>
                  </div>
                  <div class="card-action right-align">
                     <a class="brand-text" href="#">more info</a>
                  </div>
               </div>
            </div>

         <?php endforeach; ?>

         <?php if (count($pizzas) >= 3) : ?>
            <p class="center">There is more than 3 pizza</p>
         <?php else : ?>
            <p class="center">There are fewer than 3 pizzas</p>
         <?php endif; ?>

      </div>
   </div>



?>