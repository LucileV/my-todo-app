	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>To Do List</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link rel="stylesheet" href="librairies/js-datepicker/datepicker.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>

<div class="main">

		<div class="main-header">
			<h1>MY TODOLIST</h1>
			<div class="add" id="add"> + </div>
			
		</div>
	
	<!-- Liste des taches -->
	<div class="main-container" id="page1">
		
			<div class="content" id="todo">

				<ul class="list" id="todo_list">

					<li class="list-item">
						<header class="item_header">

							<div class="actions">
									<ul class="menu">
										<li><a href=""><b>Done</b></a></li>
										<li><a href="">Delete</a></li>
										<li><a href="">Edit</a></li>
									</ul>
							</div>
								
							<h2 class="item-title">
							<div class="cercle2"></div><a href="" onclick="">Take a shower</a>
							</h2>

							
						</header>


							

							<div class="task_description showme">
							My bus arrived at 11:00 
							</div>
						<footer class="task_infos showme">
						<span>Started on: 2/1/2017 - 12.00</span>
						<span>End time: 3/10/2017 - 15:00</span>
						</footer>	
				
					</li>
					<li class="list-item">
						<header class="item_header">

							<div class="actions showme">
									<ul class="menu">
										<li><a href=""><b>Done</b></a></li>
										<li><a href="">Delete</a></li>
										<li><a href="">Edit</a></li>
									</ul>
							</div>
								
							<h2 class="item-title">
							<div class="cercle2"></div><a href="">Take a shower</a>
							</h2>

							
						</header>
							

							<div class="task_description showme">
							My bus arrived at 11:00
							</div>
						<footer class="task_infos showme">
						<span>Started on: 2/1/2017 - 12.00</span>
						<span>End time: 3/10/2017 - 15:00</span>
						</footer>	
				
					</li>
				</ul>
				
			</div>
			
			<div class="content" id="done">

				<ul class="list" id="todo_list_done">

					<li class="list-item">
						<header class="item_header">
							<h2 class="item-title">
							<div class="cercle2"></div><a href="">Take a shower</a>
							</h2>
						</header>
							
					</li>
					<li class="list-item">
						<header class="item_header">
							<h2 class="item-title">
							<div class="cercle2"></div><a href="">Take a shower</a>
							</h2>
						</header>
							
					</li>
					<li class="list-item">
						<header class="item_header">
							<h2 class="item-title">
							<div class="cercle2"></div><a href="">Take a shower</a>
							</h2>
						</header>
							
					</li>
				</ul>
				
			</div>
			

			<div class="content" id="late">

				<ul class="list" id="todo_list_late">

					<li class="list-item">
						<header class="item_header">
							<h2 class="item-title">
							<div class="cercle3"></div><a href="" class="txt_barre">Sortir le chien</a>
							</h2>
						</header>		
					</li>
				</ul>
				
			</div>


	<div class="main-footer">
		<h2>Show:</h2> 
			<ul class="display">
					
						<li><a href="">All task</a></li>
						<li><a href="">Todo task</a></li>
						<li><a href="">Done task</a></li>
			</ul>
	</div>

	</div>

	<!-- FIN  Liste des taches -->

	<!-- Fiche pour ajouter une nouvelle tâche -->

	<div class="main-container" id="page2"> 
			
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
				<textarea placeholder="My do to title" class="text_grey "></textarea>
				
			</div>
			<div class="note">
				<h2 class="item-title">
				START AT
				</h2>
				<input id="date_start" type="date" class="text_grey">
				            
			
			</div>
			<div class="note">
				<h2 class="item-title">
				END AT
				</h2>
				<input id="date_end" type="date" class="text_grey">
			
			</div>
			
			<span class="bt_OK"><a href="">OK for this new task</a></span>

		<div class="main-footer">
		<h2>Add task and create new more one:</h2> 
			<ul class="display">
					
						<li><a href="">Add task</a></li>
			</ul>
		</div>


	</div>	
	<!-- FIN Liste des taches -->

				
				

</div>








<script src="script.js"></script> 
<script src="librairies/js-datepicker/datepicker.min.js"></script>

</body>
</html>