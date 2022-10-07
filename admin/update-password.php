<?php include('parties/header.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Changer le mot de passe</h1>
        <br><br>

        <?php
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
            }
        ?>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Mot de passe actuel: </td>
                    <td>
                        <input type="password" name="old_password" placeholder="Mot de passe actuel">

                    </td>
                </tr>

                <tr>
                    <td>Nouveau mot de passe: </td>
                    <td>
                        <input type="password" name="new_password" placeholder="Nouveau mot de passe">
                    </td>
                </tr>
                
                <tr>
                    <td>Confirmer le nouveau mot de passe: </td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Confirmer le nouveau mdp">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

    </div>
</div>

<?php 

    //check whether the submit button is clicked
    if(isset($_POST['submit']))
    {
        
    }

?>

<?php include('parties/footer.php'); ?>