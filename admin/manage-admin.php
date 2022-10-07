<?php include('parties/header.php'); ?>

        <!-- Main content Section Starts-->
        <div class="main-content">
            <div class="wrapper">
                <h1>Gérer l'Admin</h1>
                <br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add']; //Displaying session message
                        unset($_SESSION['add']); //Removing session message
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                ?>
                <br><br><br>
                <!-- Boutton add admin -->
                <a href="add-admin.php" class="btn-primary">Ajouter Admin</a>

                <br /><br /><br />

                <table class="tbl-full">
                    <tr>
                        <th>S.N</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>

                    <?php 
                        //Query to get all Admin
                        $sql = "SELECT * FROM admin";
                        //Execute the querry
                        $res = mysqli_query($conn, $sql);

                        //Check whether the Querry is executed or not
                        if($res==TRUE)
                        {
                            // Count Rows to check whether we have data in database or not
                            $count = mysqli_num_rows($res); // Function to get all the rows in database

                            $sn=1; // Create a variable and assign the value

                            //check the num of rows
                            if($count>0)
                            {
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows{'username'};
                                    ?>

                                    <tr>
                                        <td><?php echo $sn++; ?></td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Changer le mot de passe</a>
                                            <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Modifier Admin</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Supprimer Admin</a>
                                        </td>
                                    </tr>

                                    <?php

                                }
                            }
                            else
                            {

                            }
                        }
                    ?>

                </table>

            </div>
        </div>
        <!-- Main content section Ends-->

<?php include('parties/footer.php'); ?>