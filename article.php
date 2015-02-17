<?php

use \Blockify\Block;
use \Blockify\Element;
use \Blockify\VoidElement;

// Start Block
$block->openTag('article'); ?>
  <?php echo $block->content('top'); ?>
  <div class="article-image">
    <?php echo new VoidElement('img', [
          'src' => $block->model['image'],
          'title' => $block->model['name']
      ]);
    ?>
  </div>
  <?php echo new Element('h1', $block->model['name']); ?>
  <?php echo $block->content('middle', true); ?>
  <?php if (isset($block->childrenLocations['bottom']) && !empty($block->childrenLocations['bottom'])) { ?>
  <div class="footer text-center">
    <?php echo $block->content('bottom'); ?>
  </div>
  <?php } ?>
<?php
$block->closeTag();
