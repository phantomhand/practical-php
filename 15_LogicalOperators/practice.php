<?php
	
	// Constants
    define("TITLE", "Logical Operators");
	
	// Custom Variables
    $myName = "Frank Aveni";
    $lessonNum = 15;

    $username = "johnnyboy";
    $password = "qwerty123";
    $cartTotal = 19.99;
    $couponCode = "DISCOUNTPLZ";

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
				
				<h3>And <code>and</code></h3>
				<?php
					if ($username == "johnnyboy" and $password == "qwerty123") {
                        
                        echo "<p>Login info is correct!</p>";
                        
                    } else {
                        
                        echo "<p>Sorry, try again.</p>";
                    }
				?>
				
				<h3>Or <code>or</code></h3>
				<?php
					if ($cartTotal > 15 or $couponCode == "DISCOUNTPLZ") {
                        
                        echo "<p>You get a discount!</p>";
                        
                    } else {
                        
                        echo "<p>Sorry, no discount.</p>";
                    }
				?>
				
				<h3>Not <code>!</code></h3>
				<?php
					 $ownDog = true;
                    
                    if (!$ownDog) {
                        
                        echo "<p>You do not own a dog.</p>";
                    
                    } else {
                        
                        echo "<p>You own a dog.</p>";
                    }
				?>
				
				<h3>And <code>&amp;&amp;</code></h3>
				<?php
					if ($username == "johnnyboy" && $password = "qwerty123") {
                        
                        echo "<p>Login info is correct!</p>";
                    
                    } else {
                        
                        echo "<p>Sorry, please try again.</p>";
                    }
				?>
				
				<h3>Or <code>||</code></h3>
				<?php
					if ($cartTotal > 15 || $couponCode == "DISCOUNTPLZ") {
                        
                        echo "<p>You get a discount!</p>";
                    
                    } else {
                        
                        echo "<p>Sorry, no discount for you.</p>";
                    }
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy; <?php echo date('Y'); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
