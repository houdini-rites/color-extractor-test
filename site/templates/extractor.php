<?php snippet('header') ?>

<main>    
    

  <?php $image=$page->files()->first() ?>

  
    
  <section class="content">
      
    <div class="image">  
      <img src="<?php echo $image->url() ?>">  
    </div>

    <div class="colors">

      <?php // get colors with method ?>

      <div class="color-block dominant" style="--color:<?php echo $image->color()->toColor('dominant') ?>"></div>

      <small>Dominant: <?php echo $image->color()->toColor('dominant'); ?></small>

      <div class="color-block average" style="--color:<?php echo $image->color()->toColor('average') ?>"></div>

      <small>Average: <?php echo $image->color()->toColor('average') ?></small>

    </div>

    <div class="colors">

      <?php // get colors from array ?>

      <?php $colors= explode(',', $image->color())  ?>

      <div class="color-block dominant" style="--color:<?php echo $colors[0] ?>"></div>

      <small>Dominant: <?php echo $colors[0] ?></small>

      <div class="color-block average" style="--color:<?php echo $colors[1] ?>"></div>

      <small>Average: <?php echo $colors[1] ?></small>
    </div>


  <div class="dump">

      <?php dump($image->color()) ?>

      <?php dump($colors) ?>

  </div>

  </section>

    
</main>

<?php snippet('footer') ?>