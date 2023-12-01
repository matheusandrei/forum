<form action="index.php?controller=utilisateur&function=createUtilisateur" method="post">
    <label> Nom :
        <input name="nom" type="text">
    </label>
    <label> mot de passe :
        <input name="motDePasse" type="password" minlength="6">
    </label>
    <label> Courriel :
        <input name="nomUtilisateur" type="email">
    </label>
    <label> Naissance :
        <input name="dateDeNaissance" type="date">
    </label>
    <input type="submit" value="Save">
</form>

