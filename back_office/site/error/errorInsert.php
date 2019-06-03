<!DOCTYPE html>
<html lang="fr">
<?php $path = dirname(__DIR__);
session_start();
include($path . '/../templates/head.php');
include($path . '/../templates/connexion.php');
?>
<body>
<div class="container">
    <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Danger!</strong>
        <?php
        foreach ($verif as $key => $value){
            if($verif[$key] != 1 ) {
                echo $value;
            }
        }
        ?>
    </div>
</div>
</body>
