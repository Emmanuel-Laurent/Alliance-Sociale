<?php 

$this->layout('layout', ['title' => 'Utilisateur supprimé']);

$this->start('main_content');

?>

<input type="bouton" value="Liste des utilisateurs" onclick="document.location.href='/Alliance-Sociale/public/users/list';">

<?php  $this->stop('main_content');?>
	