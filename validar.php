

<?php
    require_once("conexao.php");
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }

  $email= $_POST['email'];
  $senha=$_POST['senha'];
   
  $sql = "SELECT id, nome FROM cliente WHERE (email= '$email') AND (senha = '$senha')";
  $query = mysqli_query($conexao,$sql);
  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);
  }
  if (!isset($_SESSION)) session_start();
    
      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioID'] = $resultado['id'];
      $_SESSION['UsuarioNome'] = $resultado['nome'];
    
      mysqli_close($conexao);
      // Redireciona o visitante
      header("Location: index.php"); exit;


  ?>