<?php
require_once 'conectaBD.php';
// definir o SGBD
// conectar com o Banco

// echo "<pre>";
// print_r($_POST);
// echo "<pre>";

if (!empty($_POST)) {
  //está chegando dados do post, então eu posso inserir no banco
  try{
    //carregar as informações
    //montar o SQL
    $sql = "INSERT INTO usuario (nome, data_nascimento, telefone, email, senha)
      VALUES (:nome, :dataNascimento, :telefone, :email, :senha)";
    //preparar o SQL
    $stmt = $pdo -> prepare($sql);
    //definir e organizzar os dados
    $dados = array(
      ':nome' => $_POST['nome'],
      ':dataNascimento' => $_POST['dataNascimento'],
      ':telefone' => $_POST['telefone'],
      ':email' => $_POST['email'],
      ':senha' => md5($_POST['senha']),
    );
    ///executar a SQL
    if ($stmt -> execute($dados)){
      header("Location: index.php?msgSucesso=Cadastro realizado com sucesso!");
    }
  }catch (Exception $e){
    // die ($e -> getMessage());
    header("Location: index.php?msgErro=Falha ao realizar o cadastro");
  }
}else{
  header("Location: index.php?msgErro=Erro de acesso.");
}
die();
// Redirecionar para a página Inicial c/ menssagem de sucesso

?>