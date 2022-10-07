<?php 

    include('../config/constants.php');

    // get the id of the admin to be deleted
    echo $id = $_GET['id'];

    // create sql query to delete the admin
    $sql = "DELETE FROM admin WHERE id=$id";

    //Execute the Query
    $res = mysqli_query($conn, $sql);

    // Check whether the query executed successfully or not
    if($res==true)
    {
        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully</div>";
        //Redirect to manage admin page
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
        $_SESSION['delete'] ="<div class='error'>Failed to delete Admin, try again later</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');

    }

    // redirect to manage admin page with message (success/error)

?>