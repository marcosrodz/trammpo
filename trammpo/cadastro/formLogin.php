<!DOCTYPE html>
<html lang="en">

  <!-- ======= HTML Head ======= -->
  <?php require_once("../head.php")?>
  <!-- End -->

<body ng-app="myApp">

  <div ng-controller="cliente">

    <!-- ======= Header ======= -->
    <header>
      <?php include "../cabecalho.php";?>
    </header><!-- End Header -->

    <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            &nbsp;
            <ol>
              <li><a href="../index.php">Home</a></li>
              <li>Cadastrar</li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs -->

    </main><!-- End #main -->

<div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
  <div class="p-3 mb-2 bg-dark text-white" class="card mb-4 rounded-3 shadow-sm">
    <div class="card-header py-3">
      <h4 class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><b>Login:</b></h4>
    </div>
      <div class="card-body text-start">
        <form action = "cadastro/login.php" method = "POST">
          <center>
          <div class="input-group mb-3">
            <span class="input-group-text">Email*</span>
            <input type="text" name = "email" class="form-control" placeholder="Digite um email" required="required">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Senha*</span>
            <input type="password" name = "senha" class="form-control" placeholder="Crie uma senha" required="required">
          </div>
          <br><br>
          <div class="container text-center">
              <div class="row">
                <div class="col"></div>
                <div class="col"><button name = "btn_conecta" type="submit" class="btn btn-outline-light btn-lg" >Conectar</button></div>
                <div class="col"></div>
              </div>
            </div>  
          <br><br>
          <div class="card-header py-3">
            <div class="form-text" id="basic-addon4">Caso seja sua primeira vez aqui</div>
            <div class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><b>Cadastre-se como:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="formCadCliente.php" class="get-started-btn scrollto">Cliente</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="formCadPrestador.php" class="get-started-btn scrollto">Prestador</a>
            </b></div>
          </div>
          </div>    
          <center>      
        </form>
      </div>
    </div>
  </div>
</div>
                  
  <!-- ======= Footer ======= -->
  <?php include '../rodape.php';?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
