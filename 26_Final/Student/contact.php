<?php 

    define("TITLE", "Contact | Franklin's Fine Dining");

    include('includes/header.php');

?>

<div id="contact">
    
    <hr>
    
    <h1>Get in touch with us</h1>
    
        <?php 
            
            // Check for and prevent header injections
            function has_header_injection($str) {
                return preg_match( "/[\r\n]/", $str );
            }
            
            if (isset ($_POST['contact_submit'])) {

                $name   = trim($POST['name']); 
                $email  = trim($POST['email']);
                $msg    = $POST['message'];

            }
    
        ?>
    
    <form method="post" action="" id="contact-form">
        
        <label for="name">Your Name</label>    
        <input type="text" id="name" name="name">
        
        <label for="email">Your Email</label>    
        <input type="text" id="email" name="email">
        
        <label for="message">Your Message</label>
        <textarea id="message" name="message"></textarea>
        
        <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
        <label for="subscribe">Subscribe to newsletter</label>
        
        <input type="submit" class="button next" name="contact_submit" value="Send Message">    
        
    </form>
    
</div><!--contact-->


<?php include('includes/footer.php'); ?>