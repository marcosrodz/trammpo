<?php
  session_start();
  require_once('../conecta.php');
  $hostname = "localhost";
  $database = "trammpo";
  $user = "root";
  $password = "";

  $con = mysqli_connect($hostname, $user, $password, $database);
  // $usuario = $_SESSION['user'];
  $email = $_POST['email'];
  $cpf = $_POST['cpf'];
  $tipo = $_POST['tipo'];
  if ($tipo == "prestador") {
    $tipo = 1;
    $modalidade = $_POST['modalidade'];
    $cnpj = $_POST['cnpj'];
  }else {
    $tipo = 0;
    $modalidade = false;
    $cnpj = false;
  }
  

  //confirmacao -- 1
  print $email.'<br>'.$cpf.'<br>'.$tipo;

  $email_duplicado = "SELECT * FROM email WHERE email_usuario = ('{$email}')";
  $cpf_duplicado = "SELECT * FROM usuario WHERE cpf = ('{$cpf}')";
  if(mysqli_query($con, $email_duplicado)->num_rows > 0 || mysqli_query($con, $cpf_duplicado)->num_rows > 0) {
      echo "<script language = 'javascript' type = 'text/javascript'>
      alert('Login já cadastrado! tente novamente!');
      window.location.href = 'formLogin.php';
      </script>";
  } else {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];

    
    //confirmacao -- 2
    print $nome.'<br>'.$sobrenome.'<br>'.$senha.'<br>'.$telefone;

    inserts($nome, $sobrenome, $cpf, $senha, $tipo, $email, $telefone, $cnpj, $modalidade, $estado, $cidade, $con);
  }



  function inserts($nome, $sobrenome, $cpf, $senha, $tipo, $email, $telefone, $cnpj, $modalidade, $estado, $cidade, $con)
  {
    
    $sqlUsuario = mysqli_query($con,"INSERT INTO usuario (`nome`, `sobrenome`, `cpf`, `senha`, `tipo_usuario_idTipo`, `perfil`) VALUES ('{$nome}','{$sobrenome}','{$cpf}','{$senha}','{$tipo}', NULL);");
    $consultaId = mysqli_query($con,"SELECT idUsuario FROM `usuario` WHERE cpf = '{$cpf}';");
    $Id = mysqli_fetch_array($consultaId);

    if ($tipo == '1') {
      $sqlPrestador = mysqli_query($con, "INSERT INTO `prestador`(`cnpj`, `usuario_idUsuario`, `modalidade_idModalidade`) VALUES ('{$cnpj}','{$Id['idUsuario']}','{$modalidade}');");
    } elseif ($tipo == '0') {
      $sqlCliente = mysqli_query($con, "INSERT INTO `cliente`(`usuario_idUsuario`) VALUES ('{$Id['idUsuario']}');");
    }

    $sqlEmail = mysqli_query($con,"INSERT INTO `email`(`email_usuario`, `usuario_idUsuario`) VALUES ('{$email}','{$Id['idUsuario']}')");
    $sqlTelefone = mysqli_query($con,"INSERT INTO `telefone`(`telefone_usuario`, `usuario_idUsuario`) VALUES ('{$telefone}','{$Id['idUsuario']}')");

    $sqlconsultaCidade = "SELECT `idCidade` FROM `cidade` WHERE nome_cidade = '{$cidade}';";
    $consultaCidade = mysqli_query($con, $sqlconsultaCidade);

    if (mysqli_num_rows($consultaCidade) > 0 ) {
      $IdCidade = mysqli_fetch_array($consultaCidade);
      $sqlEndereco = mysqli_query($con, "INSERT INTO `endereco`(`usuario_idUsuario`, `cidade_idCidade`, `estado_idEstado`) VALUES ('{$Id['idUsuario']}','{$IdCidade['idCidade']}','{$estado}');");
    } else {
      //Adiciona cidade no banco de dados
      $sqlCidade = mysqli_query($con,"INSERT INTO `cidade`(`nome_cidade`) VALUE ('{$cidade}');");
      $IdCidade = mysqli_fetch_array(mysqli_query($con, $sqlconsultaCidade));
      $sqlEndereco = mysqli_query($con, "INSERT INTO `endereco`(`usuario_idUsuario`, `cidade_idCidade`, `estado_idEstado`) VALUES ('{$Id['idUsuario']}','{$IdCidade['idCidade']}','{$estado}');");
    }
    
    //faltando gerar o id do cliente na tabela cliente
    //FALTANDO FAZER A VALIDAÇÃO E REDIRECIONAMENTO DO CADASTRO
    //ALELUIA.......ALELUIA.......ALELUIA.......ALELUIA.......ALELUIA.......ALELUIA.......ALELUIA.......ALELUIA.......ALELUIA.......ALELUIA.......ALELUIA.......ALELUIA.......ALELUIA.......

    if($sqlCliente || $sqlPrestador) {
      if($sqlUsuario && $sqlEmail && $sqlTelefone && $sqlEndereco) {
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Usuário cadastrado com sucesso!');
        window.location.href = 'usuario.php';
        </script>";
      }else {
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Usuário não pode ser  cadastrado! tente novamente!');
        window.location.href = 'usuario.php';
        </script>";
      }
    }

  }
?>