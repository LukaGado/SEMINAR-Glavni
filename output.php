<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TVZ Board</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
	<div class="navbar navbar-inverse nabvar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">TVZ Board</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">I godina<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">1. semestar</li>
							<li><a href="./trazi.php?kolegij=Fizika">Fizika</a></li>
							<li><a href="./trazi.php?kolegij=Matematika">Matematika</a></li>
							<li><a href="./trazi.php?kolegij=Primjena Računala">Primjena Računala</a></li>
							<li><a href="./trazi.php?kolegij=Programiranje">Programiranje</a></li>
							<li><a href="./trazi.php?kolegij=Engleski jezik">Engleski jezik</a></li>
							<li><a href="./trazi.php?kolegij=Njemački jezik">Njemački jezik</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">2. semestar</li>
							<li><a href="./trazi.php?kolegij=Matematika 2">Matematika II</a></li>
							<li><a href="./trazi.php?kolegij=Objektno Orijentirano Programiranje">OOP</a></li>
							<li><a href="./trazi.php?kolegij=Osnove Elektrotehnike">OEE</a></li>
							<li><a href="./trazi.php?kolegij=Uvod u Web Tehnologije">UWT</a></li>
							<li><a href="./trazi.php?kolegij=Poslovni engleski jezik">Poslovni engleski jezik</a></li>
							<li><a href="./trazi.php?kolegij=Poslovni njemački jezik">Poslovni njemački jezik</a></li>

						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">II godina<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">3. semestar</li>
							<li><a href="./trazi.php?kolegij=Algoritmi i Strukture Podataka">Algoritmi i strukture podataka</a></li>
							<li><a href="./trazi.php?kolegij=Arhitektura Računala">Arhitektura računala</a></li>
							<li><a href="./trazi.php?kolegij=Operacijski Sustavi">Operacijski sustavi</a></li>
							<li><a href="./trazi.php?kolegij=Programiranje u Jeziku Jawa">Programiranje u jeziku Java</a></li>
							<li><a href="./trazi.php?kolegij=Vjerojatnost i Statistika">Vjerojatnost i statistika</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">4. semestar</li>
							<li><a href="./trazi.php?kolegij=Baze Podataka">Baze podataka</a></li>
							<li><a href="./trazi.php?kolegij=Programski Alati u Programiranju">Programski alati u programiranju</a></li>
							<li><a href="./trazi.php?kolegij=Računalne Mreže">Računalne mreže</a></li>
							<li><a href="./trazi.php?kolegij=Uvod u UNIX Sustave">Uvod u UNIX sustave</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">II godina<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">5. semestar</li>
							<li><a href="./trazi.php?kolegij=Administracija Računalnih Mreža">Administracija računalnih mreža</a></li>
							<li><a href="./trazi.php?kolegij=Administriranje UNIX Sustava">Administriranje UNIX sustava</a></li>
							<li><a href="./trazi.php?kolegij=Seminar">Seminar</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">6. semestar</li>
							<li><a href="./trazi.php?kolegij=Završni Rad">Završni rad</a></li>
						</ul>
					</li>
					<li><a href="#contact" data-toggle="modal">Kontakt</a></li>
				</ul>
			</div> <!--/.nav-collapse -->
		</div>
	</div>
	
	<div class="container">
		<div class="jumbotron text-center">
			<h1>Vaša poruka je poslana!</h1>
			<p>

			<?php

			$name = $_POST['name'];
	        $email = $_POST['email'];
	        $message = $_POST['message'];
	        $from = 'Demo Contact Form'; 
	        $to = 'gadoschi@gmail.com'; 
	        $subject = 'Message from Contact Demo ';
	        
	        $body = "Od: $name\n E-Mail: $email\n Poruka:\n $message";

	        mail ($to, $subject, $body, $from)
			?></p>
									
			<a href="index.php" class="btn btn-primary">Na početnu!</a>
		</div>
		
	</div>
	
	
	<!-- footer -->
	<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
		<div class="container">
		
			<div class="navbar-text pull-left">
				<p>&copy 2014 TVZB</p>
			</div>
			<div class="navbar-text pull-right">
				<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
				<a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
				<a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
			</div>
		
		</div>
	</div>
	
	<!-- Bootstrap core JS
	********************************************************* -->
	<div class="modal fade" id="contact" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">

					<div class="modal-header">
						<h4 class="text-center">Kontakt</h4>
					</div>
					<div class="modal-body">
							<div class="form-group">
						
								
							</div>
					</div>
							<div class="modal-footer">
								<button type="submit" name="submit" id="submit" name="submit" class="btn btn-primary">Pošalji!</button></input>
								<a class="btn btn-default" data-dismiss="modal">Zatvori</a>
							</div>
						
			</div>
		</div>
	</div>
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>