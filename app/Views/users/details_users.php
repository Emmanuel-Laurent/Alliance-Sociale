<?php


$this->layout('layout', ['title' => 'Détail de l\'utilisateur']);

$this->start('main_content');

?>

  <?php if(!empty($affiche)):?>
    
    <p>
      <?=$affiche['firstname']; ?>
    </p>

    <p>
      <?=$affiche['lastname']; ?>
    </p>

    <p>
      <?=$affiche['email']; ?>
    </p>

    <p>
      <?=$affiche['phone']; ?>
    </p>

    <p>
      <?=$affiche['role']; ?>
    </p>

    <?php endif?>

  <?php  $this->stop('main_content');?>