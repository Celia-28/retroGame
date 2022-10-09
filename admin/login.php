<?php include('../config/constants.php');?>

<html>
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
    
    <div class="login">
        <h1 class="text-center">Connexion</h1>
        <br><br>

        <?php
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            } 

            if(isset($_SESSION['no-login-message']))
            {
                echo $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
            }
        ?>
        <br><br>

        <!-- login Form-->
        <form action="" method="POST" class="text-center">
            Nom d'utilisateur: <br>
            <input type="text" name="username" placeholder="Entrer nom d'utilisateur"><br><br>

            Mot de passe: <br>
            <input type="text" name="password" placeholder="Entrer mot de passe"><br><br>

            <input type="submit" name="submit" value="Connexion" class="btn-primary">
            <br><br>
        </form>
        <!-- Login End-->

    </div>

    </body>
</html>

<?php 

//check if the submit button is clicked
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);

    if($count==1)
    {
        $_SESSION['login'] = "<div class='success'>Connexion réussi</div>";
        $_SESSION['user'] = $username; // to check if the user is logged or not
        header('location:'.SITEURL.'../retroG/retroGame/admin/');
    }
    else
    {
        $_SESSION['login'] = "<div class='error text-center'>Erreur de connexion</div>";
        header('location:'.SITEURL.'../retroG/retroGame/admin/login.php'); 
    }
}

?>