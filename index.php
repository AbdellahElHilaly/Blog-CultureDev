


<?php
    require_once 'app/view/include/hed.php'; 
    require_once 'app/view/include/header.php'; 
    
    require_once 'autoload.php';
    
    require_once './app/controller/homecontroler.php';
    $home = new HomeController();
    $home->displayPage();

    require_once 'app/view/include/footer.php';
    

?>
<script src="public/asset/js/validation.js"></script>