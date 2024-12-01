<?php
$motDePasse = "monmotdepasse";
if (!isset($_POST['password']) || $_POST['password'] !== $motDePasse) {
    echo '<form method="POST">
             <label>Mot de passe : </label>
             <input type="password" name="password">
             <button type="submit">Valider</button>
          </form>';
    exit;
}
?>
<h1>Bienvenue sur la page protégée</h1>
<p>Contenu sécurisé ici.</p>
