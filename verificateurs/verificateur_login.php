<?php
$username_set="GLOIRE Jean-Carlos";
$password_set="gloire1234";
$username_value = isset($_POST['username']) ? $_POST['username'] : '';
if(isset($_POST['login'])){
    $username=htmlspecialchars($_POST['username']);
    $password=htmlspecialchars($_POST['password']);
    if(empty($username)){
        $error_username="Veillez complèter le nom d'utilisateur";  
    }
    elseif($username != $username_set){
        $error_username="Le nom d'utilisateur que vous avez saisi est incorrect";   
    }

    elseif(empty($password)){
        $error_password="Veillez complèter le mot de passe";  
    }
    elseif($password != $password_set){
        $error_password="Le mot de passe que vous avez saisi est incorrect";   
    }
    else{
        if(empty($error_username) AND empty($error_password)){
           
            header('Location: templates/welcome.php');
        }
    }
   

}
?>