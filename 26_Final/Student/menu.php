<?php 
    define("TITLE", "Menu | Franklin's Fine Dining");

    include('includes/header.php');
?>

    <div id="menu-items">
        
        <h1>Our Menu</h1>
        <p>Like our team, our menu is very small &mdash; but man, does it ever pack a punch!</p>
        <p><em>Click any menu item to learn more about it.</em></p>
        
        <hr>
        
        <ul>
            <?php foreach ($menuItems as $dish => $item) { ?>
            
            <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item["title"]; ?></a> – <sup>$</sup><strong><?php echo $item["price"]; ?></strong></li>
            
            <?php } ?>
            
        </ul>
        
        <hr>
        
    </div><!--menu-items-->

<?php include('includes/footer.php'); ?>

