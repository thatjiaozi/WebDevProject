<?php
    session_start();
        if(!isset($_SESSION['Username']) || $_SESSION['Username'] == '') {
            header("Location: index.php");
            die();
        }
?>
<!DOCTYPE>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Home page</title>

	<!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/mystyle.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="css/materialize-collection-actions-1.0.0.min.css">
    <script src="js/materialize-collection-actions-1.0.0.min.js"></script>

</head>

<body>
    <nav>
    <div class="nav-wrapper cyan">
        <a id="brand-logo">Space Unicorns</a>
        <img id="unicornio" src="unicornio.png" alt=""> 
        
        <ul id="nav" class="right hide-on-med-and-down cyan">
        <li><a>New Task</a></li>
        <li><a>Agenda</a></li>
        <li><a>Calendar</a></li>
        <li id = "logout"><a>Logout</a></li>
        </ul>
    </div>
</nav>
<div class="row">
    <div id="individual-sidebar" class="col s6">
        <div class="collection with-header deep-purple white-text center">
                <h4 class="task-card-title">Your Tasks for today <span><a class="btn-floating btn-large waves-effect waves-light orange center">
                        <i class="material-icons">add</i>
                </a></span></h4>
        </div>
        <ul id="tasks" class="collection">
           
        </ul>
    </div>

    <div id="projects-sidebar" class="col s6">
            <ul id="task-card" class="collection with-header">
                    <li class="collection with-header orange white-text center">
                        <h4 class="task-card-title">Your Projects</h4>
                    </li>
                    <li id="project-tasks" class="collection-item dismissable" style="touch-action: pan-y;">
                            <input id="task1" type="checkbox">
                            <label for="task1" style="text-decoration: line-through;">Create Mobile App UI. <a href="#" class="secondary-content"><span class="ultra-small">Today</span></a>
                            </label>
                            <span class="task-cat teal">Mobile App</span>
                    </li>
                    <li class="collection-item dismissable" style="touch-action: pan-y;">
                            <input id="task2" type="checkbox">
                            <label for="task2" style="text-decoration: none;">Check the new API standerds. <a href="#" class="secondary-content"><span class="ultra-small">Monday</span></a>
                            </label>
                            <span class="task-cat purple">Web API</span>
                    </li>
            </ul>
        </div>
</div>
			
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
</body>

</html>
