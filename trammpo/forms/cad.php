<?php
  session_start();
  include '../conecta.php';
  // $usuario = $_SESSION['user'];
  $email = $_POST['email'];
  PRINT $email;
  print_r($email);
  $cpf = $_POST['cpf'];
  $tipo = ['tipo_cadastro'];
  $email_duplicado = 'SELECT * FROM email WHERE email = '.$email;
  $cpf_duplicado = "SELECT * FROM usuario WHERE cpf = '$cpf'";
  if(mysqli_query($con, $email_duplicado)->num_rows > 0 || mysqli_query($con, $cpf_duplicado)->num_rows > 0) {
      echo "<script language = 'javascript' type = 'text/javascript'>
      alert('Login já cadastrado! tente novamente!');
      window.location.href = 'usuario.php';
      </script>";
  } else {
    inserts($email, $cpf, $tipo);
  }
  function inserts($email ,$cpf, $tipo)
  {
    $nome = $_POST['nome'];
    $sobrenome = ['sobrenome'];
    $senha = ['senha'];
    $telefone = ['telefone'];
    $sqlUsuario = mysqli_query($con,"INSERT INTO usuario(nome, sobrenome, cpf, senha) VALUES ('$nome', '$sobrenome', '$cpf', '$senha')");
    $sqlEmail = mysqli_query($con,"INSERT INTO email(email) VALUES ('$email')");
    $sqlTelefone = mysqli_query($con,"INSERT INTO telefone(telfone) VALUES ('$telefone')");
    $sqlEndereco = mysqli_query($con,"INSERT INTO endereco(senha) VALUES ('$login')");

    if ($tipo == 'prestador' && $_POST['cnpj'] == null) {
      $cnpj = $_POST['cnpj'];
      $sql = "INSERT INTO prestador(cnpj) VALUES ('$cnpj')";
      mysqli_query($con, $sql);
    }

    // if($sqlUsuario && $sqlEmail && $sqlTelefone && $sqlEndereco) {
    //   echo "<script language = 'javascript' type = 'text/javascript'>
    //   alert('Usuário cadastrado com sucesso!');
    //   window.location.href = 'usuario.php';
    //   </script>";
    // }else {
    //   echo "<script language = 'javascript' type = 'text/javascript'>
    //   alert('Usuário não pode ser  cadastrado! tente novamente!');
    //   window.location.href = 'usuario.php';
    //   </script>";
    // }
  }
?>