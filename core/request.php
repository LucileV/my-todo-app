<?php include 'config.php' ?>
<?php include 'connexion.php' ?>



<?php 


	$todo2 = $bdd->prepare('SELECT * FROM task WHERE task_ID= ?');
	// On execute la requete en appelant execute et en lui transmettant les paramètres
	//$todo2->execute(array($_GET['task_ID']));




 ?>