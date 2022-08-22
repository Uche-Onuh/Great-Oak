<?php

require_once 'core/init.php';
$data = DB::getInstance()->query("SELECT * FROM projects WHERE pdate < ? ORDER BY pdate", array(date('Y-m-d H:i:s')));

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Edit Projects | GREAT OAK</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content=""/>
	<!-- //Meta Tags -->
	<!-- Style-sheets -->
	<link rel="shortcut icon" href="favicon.png">

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css?yyuuyygfr" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!--// Style-sheets -->
	<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
	<!--web-fonts-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
	<!--//web-fonts-->
</head>

<body>
	<!-- banner -->
	<section class="banner1">
		<!-- header -->
		<header>
		<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-grow: unset;">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html#services">Services</a>	
					</li>
					<li class="nav-item">
						<a class="nav-link" href="projects.php">Projects</a>	
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
			</div>
		</nav>
		
		</header>
		<!-- //header -->
	</section>
	<div class="addP pt-5">
		<form enctype="multipart/form-data" method="post" action="add.php">
			<div class="container">
				<div class="row pbox">
					<div class="col-md-4">
						<label for="title">Project Title</label><input type="text" name="title" id="title">
					</div>
					<div class="col-md-8">
						<label for="desc">Project description</label><br><input type="text" name="desc" id="desc">
					</div>
				</div>
				<div class="action pt-3">
					<div class="row">
						<div class="col-md-4 pb-3">
							<input type="file" name="file">
						</div>
						<div class="col-md-8">	
							<button type="submit" name="submit">upload</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<section class="gallery pb-md-5">
		<div class="container py-4">
			<h3 class="tittle text-center mb-2">Projects</h3>
			<div class="table-responsive"> 
				<table class="table table-striped">
					<thead>
						<tr>
							<th>s/n</th>
							<th>project title</th>
							<th>description</th>
							<th>action</th>
						</tr>
					</thead>
					<tbody>
						<?php if ($data->count()) {
							$results = $data->results();
							$i = 1;
							foreach ($results as $key) {
								echo '<tr>
										<td>'.$i++.'</td>
										<td>'.$key->title.'</td>
										<td>'.$key->description.'</td>
										<td><a href="delete.php?id='.$key->id.'">delete</a></td>
									</tr>';
							}
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</body>
</html>