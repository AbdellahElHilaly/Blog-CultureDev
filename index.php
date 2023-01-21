


<?php
    require_once 'app/view/include/head.php'; 
    
    require_once 'autoload.php';
    
    require_once './app/controller/homecontroler.php';
    $home = new HomeController();
    $home->displayPage();


    require_once 'app/view/include/footer.php'; 

    
?>
