<?//php include 'config.php' ?>
<?//php include 'connexion.php' ?>

<?php 

define("DS", DIRECTORY_SEPARATOR);
require dirname(__FILE__).DS.'config.php' ;
require dirname(__FILE__).DS.'connexion.php' ;


	// On execute la requete en appelant execute et en lui transmettant les paramètres
	//

	$tasks_todo = $bdd->query('SELECT * FROM task WHERE task_status = 1');
	$tasks_done = $bdd->query('SELECT * FROM task WHERE task_status = 2');
	$tasks_late = $bdd->query('SELECT * FROM task WHERE task_status = 3');
	//$tasks_todo2 = $bdd->query('SELECT * FROM task WHERE task_ID = get);
	//
	//
	
	
		if ( isset($_POST['insertTask'])){

			$task = $_POST['insertTask'];

			$title = "Mon titre";
			$description = "Ma description";
			$startat = "Ma start";
			$endat = $startat + (24*60*60*7);

			$q = "INSERT INTO task (task_title,task_description,task_start,task_end) VALUES (:title, :description, :startat, :endat)";

			$q = $db->prepare();

			$q->binParam(":title", $title, PDO::PARAM_STR);
			$q->binParam(":description", $description, PDO::PARAM_STR);
			$q->binParam(":startat", $startat, PDO::PARAM_INT);
			$q->binParam(":endat", $endat, PDO::PARAM_INT);



			$q-> execute();

			if ($q->_rowcount() > 0){

					echo true;

			}else {

					echo false;
			}


		}



if(isset($_POST['updateTask'])){

	$task = $_POST;


}


if(isset($_POST['deleteTask'])){

	$task = $_POST;


}









/*

$title = "Mon titre";
$description = "Ma description";
$startat = "Ma start";
$endat = "end";


$q = "INSERT INTO task (task_title,task_description,task_end,task_end) VALUES (:title, :description, :startat, :endat)";

$q = $bd->prepare();

$q->binParam(":title", $title, PDO::PARAM_STR);
$q->binParam(":description", $description, PDO::PARAM_STR);
$q->binParam(":start", $startat, PDO::PARAM_INT);
$q->binParam(":endat", $endat, PDO::PARAM_INT);

$q-> execute();

*/




 
 ?>