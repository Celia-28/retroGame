<?php 
    //check if the user is logged
    if(isset($_SESSION['user']))
    {
        $_SESSION['no-login-message'] = "<div class='error text-center'>Connecter vous pour y accéder</div>";

        header('location:'.SITEURL.'../retroG/retroGame/admin/login.php');
    }
?>