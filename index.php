<?php include 'core/request.php' ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>To Do List</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="dist/accordion.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

	<link rel="stylesheet" type="text/css" href="librairies/mtr-datepicker/dist/mtr-datepicker.min.css?rel=1510749724090" />
    <link rel="stylesheet" type="text/css" href="librairies/mtr-datepicker/dist/mtr-datepicker.default-theme.min.css?rel=1510749724093" />
	

<body>


<!-- MAIN -->
<div class="main">

		<div class="main-header">
			<h1>MY TODOLIST</h1>
			<div class="add" id="add"> + </div>
			
		</div>
		
<!-- Page générale -->
<div class="main-container">
	
	<!-- page 1 -->
	<div class="page1" id="page1">
			<!-- Liste des taches done -->
			<div class="content" id="done">

				Done
				<?php while ($donnees = $tasks_done->fetch(PDO::FETCH_ASSOC)) { ?>	

				<ul class="list" id="done_list">
					<li class="list-item accordion-container">
						<div class="ac item_header">
							<h2>
							 <a href="#" class="ac-q"><div class="cercle"></div> <?php echo $donnees['task_title']; ?></a>
							</h2>
								<div class="ac-a">
									<p>
										<div class="actions ">
											<ul class="menu">
												<li><a href=""><b>Done</b></a></li>
												<li><a href="">Delete</a></li>
												<li><a href="">Edit</a></li>
											</ul>
										</div>

										<div class="task_description ac-a">
								<?php echo $donnees['task_description']; ?> 
								</div>
									<footer class="task_infos ">
										<span>Started on : <?php echo $donnees['task_start']; ?> - </span>
										<span>End time : <?php echo $donnees['task_end']; ?> </span>
									</footer>	
					
									</p>	
								</div>
								
							</div>
					</li>
				<?php } $tasks_done->closeCursor();?>
				</ul>
				
			</div>
			<!-- Fin Liste des taches done -->

			
		
			<!-- Liste des taches todo -->
			<div class="content" id="todo">
				To do
			<?php while ($donnees = $tasks_todo->fetch(PDO::FETCH_ASSOC)) { ?>	
				<ul class="list" id="todo_list">
					<li class="list-item accordion-container">

						<div class="ac item_header">
							<h2>
							<a href="#" class="ac-q"><div class="cercle2"></div> <?php echo $donnees['task_title']; ?></a>
							</h2>
							<div class="ac-a">
								<p>
									<div class="actions ">
										<ul class="menu">
											<li><a href=""><b>Done</b></a></li>
											<li><a href="">Delete</a></li>
											<li><a href="">Edit</a></li>
										</ul>
									</div>

									<div class="task_description ac-a">
							<?php echo $donnees['task_description']; ?> 
							</div>
								<footer class="task_infos ">
									<span>Started on : <?php echo $donnees['task_start']; ?> - </span>
									<span>End time : <?php echo $donnees['task_end']; ?> </span>
								</footer>	
				
								</p>	
							</div>
								
							</div>
					</li>
				<?php } $tasks_todo->closeCursor();?>
				</ul>
				
			</div>
			<!-- Fin Liste des taches todo -->
			
			
			<!-- Liste des taches late -->
			<div class="content" id="late">
				Late
				<?php while ($donnees = $tasks_late->fetch(PDO::FETCH_ASSOC)) { ?>	
				<ul class="list" id="todo_list">
					<li class="list-item accordion-container">

						<div class="ac item_header">
							<h2>
							<a href="#" class="ac-q"><div class="cercle3"></div> <?php echo $donnees['task_title']; ?></a>
							</h2>
							<div class="ac-a">
								<p>
									<div class="actions ">
										<ul class="menu">
											<li><a href=""><b>Done</b></a></li>
											<li><a href="">Delete</a></li>
											<li><a href="">Edit</a></li>
										</ul>
									</div>

									<div class="task_description ac-a">
							<?php echo $donnees['task_description']; ?> 
							</div>
								<footer class="task_infos ">
									<span>Started on : <?php echo $donnees['task_start']; ?> - </span>
									<span>End time : <?php echo $donnees['task_end']; ?> </span>
								</footer>	
				
								</p>	
							</div>
								
							</div>
					</li>
				<?php } $tasks_todo->closeCursor();?>
				</ul>
				
			</div>
			<!-- Fin Liste des taches late -->
	

			<!-- footer 1 -->
			<div class="main-footer">
				<h2>Show:</h2> 
					<ul class="display">
							
								<li><a href="" id="alltask" method="post" action="#?task_ID=<?php htmlspecialchars($_GET['task_ID']); ?>">All task</a></li>
								<li><a href="" id="todotask">Todo task</a></li>
								<li><a href="" id="dontask">Done task</a></li>
					</ul>
			</div>
			<!-- Fin footer 1 -->

	</div>

	<!-- FIN page 1 -->

	<!-- Fiche pour ajouter une nouvelle tâche -->

	<div id="page2" class="page2"> 
		<form action="">
			
			<div class="actions">
				<ul class="menu">
					<li><a href="">Clear</a></li>
				</ul>
			</div>
				
			<div class="note">
				<h2 class="item-title">
				TITLE
				</h2>
				<input type="text" placeholder="My to do title" class="text_grey">
			</div>
			<div class="note">
				<h2 class="item-title">
				DESCRIPTION
				</h2>
				<textarea placeholder="Details" class="text_grey "></textarea>
				
			</div>
			<div class="note accordion-container" id="date">
				<div class="ac">
					<h2 class="item-title"><a href="#" class="ac-q">START AT</a></h2>
						<div class="ac-a">
							
							<div class="task_description ac-a">
									<div id="datepicker-start"></div>
							</div>
												
						</div>
				</div>
			</div>
			
			<div class="note accordion-container" id="date">
				<div class="ac">
					<h2 class="item-title"><a href="#" class="ac-q">END AT</a></h2>
						<div class="ac-a">
							
							<div class="task_description ac-a">
									<div id="datepicker-end"></div>
							</div>
												
						</div>
				</div>
			</div>
		

		<div class="main-footer">
		<h2>Add task and create new more one:</h2> 
			<ul class="display">
					
				<li><a href="index.php?task_ID=1; ?>">Add task</a></li>

			</ul>
		</div>

		</form>
	</div>	
	<!-- FIN page 2 -->

				
</div>
<!-- Page générale -->	

</div>
<!-- FIN MAIN -->






<script src="dist/accordion.js"></script>
<script src="script.js"></script> 

    <script type="text/javascript" src="librairies/mtr-datepicker/dist/mtr-datepicker.min.js?rel=1510749724094"></script>

    <script type="text/javascript">
      var demoDatepicker = new MtrDatepicker({
        target: 'datepicker-start'
      });
    </script>

       <script type="text/javascript">
      var demoDatepicker2 = new MtrDatepicker({
        target: 'datepicker-end'
      });
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-72115428-1', 'auto');
      ga('send', 'pageview');

    </script>

</body>
</html>