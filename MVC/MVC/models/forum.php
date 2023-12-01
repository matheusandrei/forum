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
function delete($request)
{
    require_once("lib/connex.php");
    $id = mysqli_real_escape_string($connex, $request['id']);
    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "DELETE FROM forum WHERE id = '$id' ";
    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}
function editerDonnesArticles($request){

    require_once("lib/connex.php");
    $id=mysqli_real_escape_string($connex, $request['id']);
    $sql= "SELECT * FROM forum WHERE id ='$id';";
    $result=mysqli_query($connex,$sql);
    $count=mysqli_num_rows($result);
    print_r($count);
    if($count==1){
        $articleTrouver=mySqli_fetch_array($result, MYSQLI_ASSOC);
        print_r($articleTrouver);
        return $articleTrouver;
    }
}


function editerArticle(){
    require_once("lib/connex.php");
    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "UPDATE forum SET titre='$titre', article='$article' where id='$id'";
    
    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}

?>