<?php

Flight::route('/', function(){
    Flight::render("index.tpl",array());
});

/*********************************************************************************************************************************************************************/

Flight::route('GET /register', function(){
    Flight::render("register.tpl",array());
});

Flight::route('POST /register', function(){
    
    $db = Flight::get('db');
    $messages=array();                     //tableau récupérant les messages d'erreur 

    //récup donnéees POST
    $data = Flight::request() -> data;     //Recupération des données passées en POST

    if(empty($data->Nom)){
        $messages['Nom'] = "Le nom doit etre rempli";
    }
    if(empty($data->Email)){
        $messages['Email'] = "L'adresse mail doit etre remplie";
    } else {
        if(!filter_var($data->Email, FILTER_VALIDATE_EMAIL)){   //Teste si l'adresse mail est valide, inutile si le type d'input du formulaire est "email"
            $messages['Email']="L'adresse mail est invalide";
        }
    }
    $email = $data->Email;
    $stmt = $db->prepare("SELECT * FROM utilisateur WHERE Email =?"); //Recherche dans la base si un utilisateur possède déjà l'adresse mail rentrée
    $stmt->execute([$email]);
    $utilisateur = $stmt->fetch();   //retourne faux si l'adresse mail ne se trouve pas dans la base, vrai sinon

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


    if(count($messages) == 0){             //Si aucun message d'erreur
           Flight::redirect('/success');
           $stmt = $db -> prepare("INSERT INTO utilisateur VALUES (:Nom, :Email, :Motdepasse, :Ville, :Pays)"); //Insère les données POST dans la base de données
           $stmt->execute(array(
               ':Nom' => $_POST['Nom'],
               ':Email' => $_POST['Email'],
               ':Motdepasse' => password_hash($_POST['Motdepasse'], PASSWORD_DEFAULT), //cryptage du mdp rentré par l'utilisateur
               ':Ville' => $_POST['Ville'],
               ':Pays' => $_POST['Pays']
           ));
    } else{    //Si message d'erreur
        Flight::render('register.tpl', 
            array(
                'messages' => $messages,
                'data' => $_POST  //Insère dans les champs d'input du formulaire, les données rentrées précédemment (sauf mdp)
            ));
    }
    

});

Flight::route('/success', function(){
    Flight::render('success.tpl', array());

});

/*********************************************************************************************************************************************************************/

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
        if(!filter_var($data->Email, FILTER_VALIDATE_EMAIL)){               //inutile quand le type d'input est email
            $messages['Email']="L'adresse mail est invalide";
        }
    }
    $email = $data->Email;
    $stmt = $db->prepare("SELECT * FROM utilisateur WHERE Email =?");        //On récupère l'enregistrement de la table utilisateur où l'adresse mail est celle rentrée dans le champs mail du formulaire login
    $stmt->execute([$email]);
    $utilisateur = $stmt->fetch();

    if($utilisateur){        //Si l'utilisateur existe
        $passwd = $db->prepare("SELECT Motdepasse FROM utilisateur WHERE Email =?");       //Récupère le mot de passe crypté de l'utilisateur
        $passwd->execute([$email]);
        $mdp = $passwd->fetchColumn();   

        if(!password_verify($data->Motdepasse, $mdp)){        //Vérifie que le mot de passe entré et le mot de passe dans la base correspondent
            $messages['Motdepasse'] = "Le mot de passe ne correspond pas";
        }   
    } else {
        $messages['Email'] = "Utilisateur non trouvé, veuillez réessayer";
    }

    if(count($messages) == 0){     //Si pas de message d'erreur
        
        $infoUser = $db->prepare("SELECT Nom FROM utilisateur WHERE Email =?");   //Récupère le nom de l'utilisateur pour l'afficher
        $infoUser->execute([$email]);
        $res = $infoUser->fetchColumn();
        $_SESSION['Nom'] = $res;          //Initialise la session au nom de l'utilisateur
        $_SESSION['Email'] = $email;      // $email = $data->Email = $_POST['Email']

        Flight::redirect('/');

    } else{
     Flight::render('login.tpl', //Redirige sur la page login
         array(
             'messages' => $messages,
             'data' => $_POST 
         ));
    }

});

/*********************************************************************************************************************************************************************/

Flight::route('/profil', function(){
    if(!empty($_SESSION)){
        $db = Flight::get('db');

        $profil = $db->prepare("SELECT Nom, Email, Pays, Ville FROM utilisateur WHERE Email=?");   //Récupère toutes les infos de l'utilisateur connecté
        $profil->execute([$_SESSION['Email']]);
        $profil = $profil->fetchAll(PDO::FETCH_ASSOC);   //Retourne le résultat de la requête dans un tableau associatif
        Flight::view()->assign('profil', $profil);       //Initialise un élément profil, utile pour afficher les champs du tableau de session
        
        
        Flight::render("profil.tpl",array());
    } else {
        Flight::redirect('/login');
    }

    
});

/*********************************************************************************************************************************************************************/

Flight::route('/logout', function(){
    session_unset();     //vide le tableau de session
    Flight::redirect('/');
})
?>