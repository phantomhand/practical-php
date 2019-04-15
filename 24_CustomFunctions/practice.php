<?php
	
	// Constants
	define("TITLE", "Intro to Functions");
	
	// Custom Variables
	$myName	= "Frank Aveni";
<<<<<<< HEAD
	$lessonNum	= 24;

=======
	$lessonNum	= 23;
	
>>>>>>> 6a5a0b9fd1a65d4ba9255c45b42e08d84315ef06
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Using <code>sort()</code></h3>
				<?php
					
					$dinner = array("Meat", "Potatoes", "Beans", "Rice", "Vegetables");
                    
                    sort($dinner);
                    
                    foreach ($dinner as $ingredient) {
                    
                    echo "$ingredient <br>";
                    
                    }
					
				?>
				
				<h3>Using <code>rsort()</code></h3>
				<?php
					        
                    rsort($dinner);
                    
                    foreach ($dinner as $ingredient) {
                    
                    echo "$ingredient <br>";
                    
                    }
					
				?>
				
				<h3>Using <code>strtolower()</code></h3>
				<?php
					
					$text = "Twinkle Twinkle Little Star";
                
                    $text = strtolower($text);
                
                    echo $text;
					
				?>
				
				<h3>Using <code>sha1()</code></h3>
				<?php
					
<<<<<<< HEAD
					function hangTen() {
                        
                        echo "Surf's up, dudes!";
                    }
                
                    $surfIsUp = true;
                    
                    if ( $surfIsUp ) {
                        
                    hangTen();
                        
                    } else {
                        
                        echo "Bummer, brah!";
                        
                    }    
                
=======
					$password = "MyPassword";
                
                    echo "Before: $password <br>";
                
                    $password = sha1($password);
                
                    echo "After: $password";
					
>>>>>>> 6a5a0b9fd1a65d4ba9255c45b42e08d84315ef06
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
