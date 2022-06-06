<?php
  $site = "My Photoblog - last picture";
  require "header.php";
  $pic = Picture::last();
?>
/* The HTML code that is being displayed on the page. */
  <div class="block" id="block-text">
    <div class="secondary-navigation">
      <div class="content">
        <h2 class="title">Last picture: <?php echo h($pic->title); ?></h2>
        
        <div class="inner" align="center">
          <p>
            <?php echo $pic->render(); ?>
          </p>
        </div>
     </div>

    </div>
  </div>


<?php


  require "footer.php";
?>


