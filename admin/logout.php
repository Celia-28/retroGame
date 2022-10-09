<?php
    include('../config/constants.php');
    // destroy the session
    session_destroy();

    // redirect the login page
    header('location:'.SITEURL.'../retroG/retroGame/admin/login.php');
?>