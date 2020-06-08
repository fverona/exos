<?php
if (isset($_POST['login']) AND isset($_POST['pass']))
{
    $login = $_POST['login'];

	$pass_crypte = password_hash($_POST["pass"], PASSWORD_BCRYPT);
    
    echo '<p>Ligne à copier dans le .htpasswd :<br/><br/>' . $login . ':' . $pass_crypte . '</p><br>';


    // Vérification si le mot de passe crypté $pass_crypte correspond bien au mot de passe saisi en clair.  

    if (password_verify($_POST["pass"], $pass_crypte))
    {
    echo 'Le mot de passe est valide !';
	} 
	else
 	{
    echo 'Le mot de passe est invalide.';
	}


}

else // On n'a pas encore rempli le formulaire
{


?>


<p>Entrez votre login et votre mot de passe pour le crypter.</p>

<form method="post">
    <p>
        Login : <input type="text" name="login"><br />
        Mot de passe : <input type="text" name="pass"><br /><br />
    
        <input type="submit" value="Crypter !">
    </p>
</form>

<?php
}
?>