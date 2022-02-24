<?php snippet('header') ?>

<main>    
    
  <h1><?php echo $page->title() ?></h1>
    
  <section class="content">
      
    <?php echo $page->text()->kt() ?>
      
  </section>
    
</main>

<?php snippet('footer') ?>