<?php include('parties/header.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Modification Admin</h1>

        <br><br>

        <?php
            //get the id of selected admin
            $id=$_GET['id'];

            //create SQL Query to get the details
            $sql="SELECT * FROM admin WHERE id=$id";

            //execute the Query
            $res=mysqli_query($conn,$sql);

            //check whether the Query is executed or not
            if($res==true)
            {
                //check whether the data is available or not
                $count = mysqli_num_rows($res);
                //check whether we have admin data or not
                if($count==1)
                {
                    $row=mysqli_fetch_assoc($res);

                    $full_name = $row['full_name'];
                    $username = $row['username'];
                }
                else
                {
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
        ?>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Nom Complet: </td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Nom d'utilisateur: </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Modifier" class="btn-secondary">
                    </td>
                </tr>

            </table>
        </form>
    </div>
</div>

<?php 

    //check whether the submit button is clicked or not
    if(isset($_POST['submit']))
    {
        //get all the value from Form to update
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];

        //create a SQL Query to update admin
        $sql = "UPDATE admin SET
        full_name = '$full_name',
        username = '$username'
        WHERE id='$id'
        ";

        //executed the query
        $res = mysqli_query($conn, $sql);

        //check whether the Query is executed or not
        if($res==true)
        {
            $_SESSION['update'] = "div class='success'>Admin modifié</div>";
            header('location:'.SITEURL.'admin/manage-admin.php');
        }
        else
        {
            $_SESSION['update'] = "div class='error'>Erreur</div>";
            header('location:'.SITEURL.'admin/manage-admin.php');
        }

    }

?>

<?php include('parties/footer.php'); ?>