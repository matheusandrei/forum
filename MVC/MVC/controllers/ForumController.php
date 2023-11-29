<?php 
function afficherPageForum(){
    render('/forum/forum.php');
}

function creerUnArticle(){
    require_once(MODEL_DIR."/forum.php");
    ajouterUnArticle();
}
?>