<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
 <link rel="stylesheet" href="styles.css">
 </head>
 <body style='background:#fff;'>
 <div id="content">
 <!-- tester si l'utilisateur est connecté -->
 <?php
 session_start();
 if($_SESSION['username'] !== ""){
 $user = $_SESSION['username'];
 // afficher un message
 echo "Bonjour $user, vous êtes connecté ";
 }
 ?>
 <html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="style.css" media="screen" type="text/css" />

  















 </head>
 <body style='background:#fff;'>
 <div id="content">
 
 <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
 
 <!-- tester si l'utilisateur est connecté -->
 <?php
 
 if(isset($_GET['deconnexion']))
 { 
 if($_GET['deconnexion']==true)
 { 
 session_unset();
 header("location:index.php");
 }
 }
 else if($_SESSION['username'] !== ""){
 $user = $_SESSION['username'];
 // afficher un message
 
 }
 ?>











<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="wrapper">
				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span>Revenir à l'accueil </a>
				<a href="index.php?page=search&pickup=2023-08-01 13%3A37&dropoff=2023-08-02 13%3A37&category_id=0" class="nav-item nav-movement"><span class='icon-field'><i class="fa fa-th-list"></i></span> Chercher une voiture</a>
				<a href="index.php?page=categories" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-list"></i></span> </a>
				<a href="index.php?page=transmissions" class="nav-item nav-transmissions"><span class='icon-field'><i class="fa fa-cog"></i></span></a>
				<a href="index.php?page=engine_types" class="nav-item nav-engine_types"><span class='icon-field'><i class="fa fa-bolt"></i></span></a>
				<a href="index.php?page=books" class="nav-item nav-books"><span class='icon-field'><i class="fa fa-book"></i></span></a>
				<a href="index.php?page=cars" class="nav-item nav-cars"><span class='icon-field'><i class="fa fa-car"></i></span></a>
<!-- 				
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> System Settings</a>
			<?php endif; ?> -->
		</div>

</nav>




 
 </div>
 </body>
</html>