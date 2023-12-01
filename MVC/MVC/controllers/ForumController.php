<?php 
function afficherPageForum(){
    render('/forum/forum.php');
}
function afficherFormArticle()
{

    render('/forum/article.php');
}

function creerUnArticle(){

    require_once(MODEL_DIR."/forum.php");
    ajouterUnArticle();
    render('/forum/forum.php');
    
}
function logout(){
    session_destroy();
    render('/utilisateur/login.php');
}
function deleteArticle($request){
    require_once("models/forum.php");
    delete($request);
    render("/forum/forum.php");
}



function formedit($request){
    require_once("models/forum.php");
    $articleTrouver=editerDonnesArticles($request);
    render('/forum/edition.php', $articleTrouver);
}

function editer(){
    require_once("models/forum.php");
    editerArticle();
    render('/forum/forum.php');
}

?>