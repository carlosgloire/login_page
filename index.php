<?php
require_once('verificateurs/verificateur_login.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="js/icon_view.js"></script>
    <title>Login</title>

</head>
<body class="flex items-center justify-center h-screen">
    <div class='w-[92%] sm:w-[70%] md:w-[60%] lg:w-[45%] xl:w-[40%] sm:px-14 md:px-16 py-10 px-6 text-lg rounded-lg text-slate-900  shadow-sm border '>
        <h1 class="text-3xl mb-6 text-center font-semibold" >Connexion utilisateur</h1>
        <form action="" method='post' class='mb-2'>
          <div class='grid  mb-4'> 
            <label for="username" >Nom d'utilisateur ou Email</label>
            <div class="rounded-md  items-center border gap-2  flex placeholder-slate-400  px-3 py-[2px] <?= isset($error_username) ? 'border-red-600 ': 'border-slate-200'?>">
                <input class="  w-full outline-none text-slate-400  placeholder-slate-400 " type="text" name='username'  value="<?=  isset($_POST['username']) ? $_POST['username'] : '';?>"  placeholder="Saisissez votre Nom  ou l'Email " >
                <p class="<?= isset($error_username) ? ' ': 'hidden'?>"><i class="fa-solid fa-circle-exclamation text-red-600 "></i></p>
            </div>
            <p class="text-red-500 text-sm"><?=isset($_POST['login']) && ! empty($error_username)? $error_username: " "; ?></p>
          </div>
          <div class='grid mb-4 '> 
              <label for="password" method='password'>Mot de passe</label>
              <div class="rounded-md items-center border gap-2  flex placeholder-slate-400  px-3 py-[2px]  <?= isset($error_password) ? 'border-red-600 ': 'border-slate-200'?>">
                <input id="password" class=" outline-none text-slate-400 w-full  placeholder-slate-400" type="password" name='password' value="<?=  isset($_POST['pssword']) ? $_POST['password'] : '';?>"  autocomplete="off" placeholder="Saisissez votre mot de passe">
                <img class="object-cover  w-[24px] h-[22px] cursor-pointer"  src="images/icon_off.png" alt=""  id="eye_icon" onClick ="changer()">
              </div>
              <p class="text-red-500 text-sm"><?=isset($_POST['login']) && ! empty($error_password)? $error_password: " "; ?></p>
          </div>
          <input class='bg-gradient-to-r  from-slate-900 to-green-700 hover:from-green-700 hover:to-slate-900 py-[2px] text-white p-x-20 w-full rounded-md font-semibold hover:bg-slate-900' type="submit" name='login' value='Connexion'>
      </form>
      <a href="#" class=" hover:underline text-blue-500">Mot de passse oublié?</a>
    </div>  
</body>
</html> 
