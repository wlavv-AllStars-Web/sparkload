<?php
session_start();

if (isset($_POST['cooki'])) {
  $_SESSION['cooki'] = $_POST['cooki'];
  echo 'Variável cooki registrada como sessão PHP com sucesso.';
} else {
  echo 'Erro ao registrar a variável cooki como sessão PHP.';
}
?>
