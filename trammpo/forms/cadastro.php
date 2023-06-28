<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Trammpo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
  <!-- Vendor CSS/JS Files -->
  <?php include "insert_links.php"?>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: May 18 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.js"></script>
  <script src="../angular/cliente.js"></script>
</head>

<body ng-app="myApp">

  <div ng-controller="cliente">

    <!-- ======= Header ======= -->
    <header>
      <?php include "cabecalho.php";?>
    </header><!-- End Header -->

    <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Cadastro</h2>
            <ol>
              <li><a href="index.php">Home</a></li>
              <li>Cadastrar</li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs -->

      <section class="inner-page">
        <div class="container">
          <p>
            Selecione o tipo de usuário
          </p>
        </div>
      </section>

    </main><!-- End #main -->

    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
      <div class="p-3 mb-2 bg-dark text-white" class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            <h4 class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><b>Cadastro:</b></h4>
        </div>
        <div class="card-body text-start">
          <form action = "forms/cad.php" method = "POST">

            <div class="row">
              <div class="col">
              </div>
              <div class="col">
              <input type="radio" ng-click="mostrarCliente()" id="usuarioCliente" name="tipo_cadastro" value="cliente">
              <a href="servicos.php"><label for="cliente">Cliente</label></a>
              </div>
              <div class="col">
                <input type="radio" ng-click="mostrarPrestador()" id="usuarioPrestador" name="tipo_cadastro" value="prestador">
                <label for="prestador">Prestador</label>
              </div>
              <div class="col">
              </div>
              <br><br>
            </div>
           
            <!------------------------------------>
            
            <div  ng-show="mostra_cliente">
                    
              <input type="text" name = "nome" class="form-control" placeholder="Nome" required="required">
              <br>
              <input type="text" name = "sobrenome" class="form-control" placeholder="Sobrenome" required="required">
              <br>
              <input type="number" id="cpf" name = "cpf" class="form-control" placeholder="CPF" required="required">
              <input type="number" id="telefone" name = "telefone" class="form-control" placeholder="Telefone" required="required">
              <br><br>
              <input type="text" id="cidade"name = "cidade" class="form-control" placeholder="Cidade" required="required">
              <input type="text" id="estado" name = "estado" class="form-control" placeholder="Estado" required="required">
              <br><br>
              <input type="email" name = "email" class="form-control" placeholder="Digite um email" required="required">
              <br>
              <input type="password" name = "senha" class="form-control" placeholder="Crie uma senha" required="required">
              <br>

            </div>

            <!------------------------------------>

            <div ng-show="mostra_prestador">
                    
            <input type="text" name = "nome" class="form-control" placeholder="Nome">
              <br>
              <input type="text" name = "sobrenome" class="form-control" placeholder="Sobrenome">
              <br>
              <input type="text" id="cpf" name = "cpf" class="form-control" placeholder="CPF">
              <input type="text" id="cnpj" name = "cnpj" class="form-control" placeholder="CNPJ">
              <input type="number" id="telefone" name = "telefone" class="form-control" placeholder="Telefone">  
              <br><br>
              <input type="text" id="cidade"name = "cidade" class="form-control" placeholder="Cidade">
              <input type="text" id="estado" name = "estado" class="form-control" placeholder="Estado">
              <br><br>
              <label for="modalidade">Modalidade</label>
              <select name="modalidade" class="form-control">
                <option value="cozinheiro ">Cozinheiro(a)</option>
                <option value="churrasqueiro">Churrasqueiro(a)</option>
                <option value="diarista">Diarista</option>
                <option value="eletricista">Encanador</option>
              </select>
              <br>
              <input type="text" name = "email" class="form-control" placeholder="Digite um email">
              <br>
              <input type="password" name = "senha" class="form-control" placeholder="Crie uma senha">
              <br>
            </div>
            
            <!------------------------------------>

            <div class="container text-center">
              <div class="row">
                <div class="col"></div>
                <div class="col"><button name = "registra_cliente" type="submit" class="btn btn-primary btn-lg" >Cadastrar</button></div>
                <div class="col"></div>
              </div>
            </div>            
          </form>
        </div>
      </div>
    </div>
  </div>  <!-- fim da div do controller js -->
                  
  <!-- ======= Footer ======= -->
  <?php include 'rodape.php';?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
