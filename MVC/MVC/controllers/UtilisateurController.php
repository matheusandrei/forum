<?php

function login(){
    // require_once("/models/utilisateur.php");
    require_once(MODEL_DIR."/utilisateur.php");
    seConnecter();
}

function create(){

   render('/utilisateur/create.php');
}

function store(){
   require_once(MODEL_DIR."/utilisateur.php");
   render('/utilisateur/login.php');
}
function createUtilisateur(){
    require_once(MODEL_DIR."/utilisateur.php");
    utilisateurInsert();
    store();
}



?>
