<?php

Flight::route('/', function(){
    Flight::render("index.tpl",array());
});

Flight::route('GET /register', function(){
    Flight::render("register.tpl",array());
});








Flight::route('POST /register', function(){
    
    $db = Flight::get('db');
    $messages=array();

    //récup donnéees POST
    $data = Flight::request() -> data;

    if(empty($data->Nom)){
        $messages['Nom'] = "Le nom doit etre rempli";
    }
    if(empty($data->Email)){
        $messages['Email'] = "L'adresse mail doit etre remplie";
    } else {
        if(!filter_var($data->Email, FILTER_VALIDATE_EMAIL)){
            $messages['Email']="L'adresse mail est invalide";
        }
    }
    $email = $data->Email;
    $stmt = $db->prepare("SELECT * FROM utilisateur WHERE Email =?");
    $stmt->execute([$email]);
    $utilisateur = $stmt->fetch();

    if($utilisateur){
        $messages['Email'] = "L'utilisateur existe déjà";    
    }

    if(empty($data->Motdepasse)){
        $messages['Motdepasse'] = "Le mot de passe ne doit pas être vide";
    }
    else
    if(strlen($data->Motdepasse) < 8){
        $messages['Motdepasse'] = "Le mot de passe doit faire 8 caracteres";
    }

    if(empty($data->Pays)){
        $messages['Pays'] = "Veuillez remplir votre Pays";
    }

    if(empty($data->Ville)){
        $messages['Ville'] = "Veuillez remplir votre Ville";
    }


    if(count($messages) == 0){
           Flight::redirect('/success');
           $stmt = $db -> prepare("INSERT INTO utilisateur VALUES (:Nom, :Email, :Motdepasse, :Ville, :Pays)");
           $stmt->execute(array(
               ':Nom' => $_POST['Nom'],
               ':Email' => $_POST['Email'],
               ':Motdepasse' => password_hash($_POST['Motdepasse'], PASSWORD_DEFAULT),
               ':Ville' => $_POST['Ville'],
               ':Pays' => $_POST['Pays']
           ));
    } else{
        Flight::render('register.tpl', 
            array(
                'messages' => $messages,
                'data' => $_POST
            ));
    }
    

});

Flight::route('GET /success', function(){
    Flight::render('success.tpl', array());
});





Flight::route('GET /fichier', function(){
    Flight::render("fichier.tpl",array());
});

Flight::route('GET /login', function(){
    Flight::render("login.tpl",array());
});

Flight::route('POST /login', function(){
    $db = Flight::get('db');
    $messages=array();

    //récup donnéees POST
    $data = Flight::request() -> data;

    if(empty($data->Email)){
        $messages['Email'] = "Veuillez remplir l'adresse mail";
    } else {
        if(!filter_var($data->Email, FILTER_VALIDATE_EMAIL)){
            $messages['Email']="L'adresse mail est invalide";
        }
    }
    $email = $data->Email;
    $stmt = $db->prepare("SELECT * FROM utilisateur WHERE Email =?");
    $stmt->execute([$email]);
    $utilisateur = $stmt->fetch();

    if($utilisateur){
        $passwd = $db->prepare("SELECT Motdepasse FROM utilisateur WHERE Email =?");
        $passwd->execute([$email]);
        $mdp = $passwd->fetchColumn();

        if(!password_verify($data->Motdepasse, $mdp)){
            $messages['Motdepasse'] = "Le mot de passe ne correspond pas";
        }   
    } else {
        $messages['Email'] = "Utilisateur non trouvé, veuillez réessayer";
    }

    if(strlen($data->Motdepasse) < 8){
        $messages['Motdepasse'] = "Le mot de passe doit faire 8 caractères";
    }

    if(count($messages) == 0){
        
        $infoUser = $db->prepare("SELECT Nom FROM utilisateur WHERE Email =?");
        $infoUser->execute([$email]);
        $res = $infoUser->fetchColumn();
        $_SESSION['Nom'] = $res;
        $_SESSION['Email'] = $email;
        if(!empty($_SESSION['Nom'])) {
            Flight::redirect('/');
        }
        
    } else{
     Flight::render('login.tpl', 
         array(
             'messages' => $messages,
             'data' => $_POST
         ));
 }

});

Flight::route('/profil', function(){
    if(!empty($_SESSION)){
        $db = Flight::get('db');

        $profil = $db->prepare("SELECT Nom, Email, Pays, Ville FROM utilisateur WHERE Email=?");
        $profil->execute([$_SESSION['Email']]);
        $profil = $profil->fetchAll(PDO::FETCH_ASSOC);
        Flight::view()->assign('profil', $profil);
        
        
        Flight::render("profil.tpl",array());
    } else {
        Flight::redirect('/login');
    }

    
});


Flight::route('/logout', function(){
    session_unset();
    Flight::redirect('/');
})
?>
