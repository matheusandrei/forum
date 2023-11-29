<?php



function utilisateurInsert() {
    require_once(CONNEX_DIR);

    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
        error_log('key : ' . $key . 'value : ' . $value);
    }

    $salt = "H@%h14";
    $saltmotDePasse = $motDePasse . $salt;
    $hashMotDePasse =  password_hash($saltmotDePasse, PASSWORD_BCRYPT, ['cost' => 10]);
    //$hashMotDePasse = hash('sha256', $saltmotDePasse);

    $sql = " INSERT INTO utilisateur (nom, nomUtilisateur, motDePasse, dateDeNaissance) VALUES ('$nom', '$nomUtilisateur', '$hashMotDePasse', '$dateDeNaissance')";

    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}


function seConnecter(){

    session_start();
    require('lib/connex.php');
    
    foreach($_POST as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    
    // 1- check user
    $sql = "SELECT * FROM utilisateur WHERE nomUtilisateur = '$nomUtilisateur'";
    
    $result = mysqli_query($connex, $sql);
    
    //2 - verifier nombre de lignes
    $count = mysqli_num_rows($result);
    if($count == 1){
    //3 verifier le mot de passe
    $info_user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $info_user['motDePasse'];

    $salt = "H@%h14";
    $saltPassword = $motDePasse . $salt;
    
        if(password_verify($saltPassword, $info_user['motDePasse'])){
            
            echo"dasdsadsa";
            //print_r($info_user);
            session_regenerate_id();
            $_SESSION['id'] = $info_user['id'];
            $_SESSION['nom'] = $info_user['nom'];
            $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);
           
            header('location:index.php?controller=forum&function=afficherPageForum');
    
        }else{
            echo"nao valido"; 
        }
    
    }else{
        header('location:login.php?msg=1');
    }
    





}

?>