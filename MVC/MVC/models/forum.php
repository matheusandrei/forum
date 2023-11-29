<?php


function forumSelect() {
    require(CONNEX_DIR);
    $sql = "SELECT * FROM forum ";
    $result = mysqli_query( $connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}
function ajouterUnArticle(){
    require(CONNEX_DIR);
    foreach($_POST as $key =>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "INSERT INTO forum ( titre, article, date, auteur, utilisateur_id) VALUES ('$titre', '$article', '$date', '$auteur', '$utilisateur_id')";
    
    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return "Error: " . $sql . "<br>" . mysqli_error($connex);
    }

}
?>