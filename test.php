<?php
  require('config.php');
  session_start();
  if(!isset($_POST['action']) && !isset($_GET['logout'])){
     $pwd = shell_exec('pwd;');
    setcookie('path', trim($pwd));
    $_COOKIE['path'] = $pwd;
  }elseif(isset($_GET['logout'])){
      setcookie('path', '', time()-42);
    session_destroy();
    header('Location:index.php');
  }


}
