<?php include('parties/header.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Ajouter Admin</h1>

        <br><br>

        <?php 
            if(isset($_SESSION['add'])) //Checking whether the session is set or not
            {
                echo $_SESSION['add']; // Display the session message if set
                unset($_SESSION['add']); // Remove session message
            }
        ?>

        <form action="" method="POST">

        <table class="tbl-30">
            <tr>
                <td>Nom Complet: </td>
                <td>
                    <input type="text" name="full_name" placeholder="Entrer votre nom">
                </td>
            </tr>

            <tr>
                <td>Nom d'utilisateur: </td>
                <td>
                    <input type="text" name="username" placeholder="Votre nom d'utilisateur">
                </td>
            </tr>

            <tr>
                <td>Mot de passe: </td>
                <td>
                    <input type="password" name="password" placeholder="Votre mot de passe">
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Enregistrer" class="btn-primary">
                </td>
            </tr>
        </table>

        </form>

    </div>
</div>

<?php include('parties/footer.php'); ?>

<?php 

if(isset($_POST['submit']))
{
    //Button Clicked

    //Get the Data from form
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); // md5 = can't decrypt the password

    //SQL QUERY to save the data into database
    $sql = "INSERT INTO admin SET
        full_name='$full_name',
        username='$username',
        password='$password'
    ";

    // Executing Query an daving data into database
    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    // Check whether the data is inserted or not
    if($res==TRUE)
    {
        //echo "Data Inserted";
        //create a session variable to display message
        $_SESSION['add'] = "Admin Added Successfully";
        //Redirect page
        header("location:".SITEURL.'admin/manage-admin.php');
    }
    else
    {
        //echo "Failed to insert data";
        //create a session variable to display message
        $_SESSION['add'] = "Failed to Add Admin";
        //Redirect page
        header("location:".SITEURL.'admin/manage-admin.php');
    }

}

?>