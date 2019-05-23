<?php $title = 'Admin for Compte'; $path = getcwd();?><!DOCTYPE html>
<html lang="fr">
<head>
    <?php include($path.'/../../../templates/head.php') ; ?>
    <meta charset="UTF-8">
    <title>Page Login</title>
    <base href="http://localhost/test/admin/">
</head>
<?php
include($path . '/../../../gestion/compte/getCompte.php');
if(isset($errorInsert)){include($path.'/../../..//site/Compte/error/errorInsert.php');}
?>

<form method="POST" action="./back_office/gestion/compte/updateCompte.php">
	    <input type="hidden" name="ID_COMPTE" value="<?php echo $compte->getId(); ?>">
        <input type="hidden" value="<?php $datecrea = DateTime::createFromFormat("Y-m-d", $compte->getDate()); echo $datecrea->format('d/m/Y'); ?>" name="DATE_CREATION"/>
		<a> Login    : <input type="text" value="<?php echo $compte->getLogin(); ?>" id="login" name="LOGIN" /> Minimum 3 Caractères</a><br />
		<a> Mail     : <input type="text" value="<?php echo $compte->getMail(); ?>" id="mail" name="EMAIL"/> </a><br />
		<a> Password : <input type="text" value="<?php echo $compte->getMdp(); ?>" id="password" name="MOT_DE_PASSE"/> Minimum 8 Caractères (1maj, 1chiffre, 1caractere special)</a><br />
        <button style="display: block;margin-left: 10px;" type="submit" class="btn btn-primary" name="submit">Valider</button>
</form>
<br />
<form method="POST" action="./back_office/site/Compte/page/prive.php">
    <button style="display: block;margin-left: 10px;" type="submit" class="btn btn-primary" name="Retour">Retour</button>
</form>