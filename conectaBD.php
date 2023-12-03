<?php
//endereco
//nome do BD
//usuario
//senha

$endereco = 'localhost';
$nomeBD = 'sispet';
$usuario = 'postgres';
$senha = '12345678';

try {
  // sgbd: host;port;dbname - primeiro argumento
  // usuario
  // senha
  // errmode
  $pdo = new PDO ( "pgsql:host=$endereco;port=5432;dbname=$nomeBD", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  echo "conectado no banco de dados!";

} catch (PDOException $e) {
  echo "Falha ao conectar com o banco de dados <br/>";
  die($e->getMessage());
}
?>