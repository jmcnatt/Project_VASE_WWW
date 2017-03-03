<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Project_VASE - Virtualized Administrative Security Environment</title>
		<link rel="stylesheet" type="text/css" href="resources/main.css" />
		<link rel="shortcut icon" href="favicon.ico" />
		<script type="text/javascript" src="resources/scripts.js"></script>
	</head>
	
	<body>
		<div class="content">
			<?php include("navbar.html"); ?>
			<div class="body">
				<!-- Main Content -->
					<div class="page">
					<?php
						$title = "<h1>/ / / ";
						$end = "</h1>";
						$id = $_GET['id'];
						
						if ($id == "home" || $id == "")
						{
							$title = $title . "Updates" . $end;
							echo $title;
							include("updates.html");
						}
						
						elseif ($id == "vase")
						{
							$title = $title . "About" . $end;
							echo $title;
							include("projectvase.html");
						}
						
						elseif ($id == "software")
						{
							$title = $title . "Software" . $end;
							echo $title;
							include("software.html");
						}

						elseif ($id == "wiki")
						{
							header("Location: docs/");
						}
						
						elseif ($id == "prototype")
						{
							$title = $title . "Prototype" . $end;
							echo $title;
							include("prototype.html");
						}
						
						elseif ($id == "references")
						{
							$title = $title . "References" . $end;
							echo $title;
							include("references.html");
						}
						
						elseif ($id == "contact")
						{
							$title = $title . "Contact" . $end;
							echo $title;
							include("contact.html");
						}
						
						else
						{
							echo "Error: page not found";
						}
					?>
					</div>
					
					<?php include("sidebar.html"); ?>
				<!-- End Main Content -->
			</div>
			<?php include("footer.html"); ?>
		</div>
	</body>
</html>