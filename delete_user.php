<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php
  $delete_id = delete_by_id('users',(int)$_GET['id']);
  if($delete_id){
      $session->msg("s","Usuario Eliminado.");
      redirect('usuarios.php');
  } else {
      $session->msg("d","Algo fallo.");
      redirect('usuarios.php');
  }
?>