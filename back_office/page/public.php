<?php $title = 'LoginPage';?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../templates/head.php'); ?>
    <meta charset="UTF-8">
    <title>Page Login</title>
</head>
<body>
<form action="../gestion/login.php" method="post">
    <?php if(isset($error)){
<<<<<<< HEAD:page/public.php
        include('page_pack_office/error/errorlogin.php');}?>
=======
        include('errorlogin.php');}?>
>>>>>>> master:back_office/page/public.php
    <div class="form" align="center">
        <div class="form">
            <label for="login">Login</label>
            <input style="width: 200px;" type="text" class="form-control" id="login" name="login" aria-describedby="loginHelp" placeholder="Enter Login" value="">
        </div>
        <div class="form">
            <label for="mpd">Password</label>
            <input style="width: 200px;" type="password" class="form-control" name="mdp" placeholder="Password" value="">
        </div>
    </div>
    <button style="display: block;margin : auto;" type="submit" class="btn btn-primary" name="connexion">Connexion</button>
</form>
</body>
</html>