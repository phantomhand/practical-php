<?php
	
	// Constants
    define("TITLE", "Arrays");
	
	// Custom Variables
    $my_name    = "Frank Aveni";
    $lesson_num = 6;
	
	// Moustache Array
    $moustaches = array("Handlebar", "Salvador Dali", "Fu Manchu");

?>

<!DOCTYPE html>
<html>
	<head>
		<title>
		<!-- PAGE TITLE -->
		<?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Lecture 
			<!-- LESSON NUMBER -->
			<?php echo $lesson_num; ?>: <small>
			<!-- PAGE TITLE -->
			<?php echo TITLE; ?>
			</small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>Moustache Types</h2>
				<ul>
					<li>
					<!-- MOUSTACHE 1 -->
					<?php echo $moustaches[0]; ?>
					</li>
					<li>
					<!-- MOUSTACHE 2 -->
					<?php echo $moustaches[1]; ?>
					</li>
					<li>
					<!-- MOUSTACHE 3 -->
					<?php echo $moustaches[2]; ?>
					</li>
				</ul>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<!-- YEAR --><?php echo date('Y'); ?> - <!-- YOUR NAME --><?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
