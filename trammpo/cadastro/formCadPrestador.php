  
  <!-- ======= HTML Head ======= -->
  <?php require_once("../head.php")?>
  <!-- End -->

<body>


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
          <li><a href="index.php">Home</a></li>
          <li><a href="formCadLogin.php">Login</a></li>
          <li>Cadastrar</li>
        </ol>
      </div>
    </div>
  </section><!-- End Breadcrumbs -->

  </main><!-- End #main -->

  <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
    <div class="p-3 mb-2 bg-dark text-white" class="card mb-4 rounded-3 shadow-sm">
      <div class="card-header py-3">
        <h4 class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><b>Cadastro para Prestador:</b></h4>
      </div>
      <div class="card-body text-start">
        <form action = "cadastro.php" method = "POST">
          <div class="row">
            <div class="col">
              <div class="input-group mb-3">
                <span class="input-group-text">Nome*</span>
                <input type="text" name = "nome" class="form-control" placeholder="Nome" required="required">
              </div>
            </div>
            <div class="col">
              <div class="input-group mb-3">
                <span class="input-group-text">Sobrenome*</span>
                <input type="text" name = "sobrenome" class="form-control" placeholder="Sobrenome" required="required">
              </div>
            </div>
          </div>

          <div class="form-text" id="basic-addon4">CNPJ não obrigatório</div>
            <div class="row">
              <div class="col">
                <div class="input-group mb-3">
                  <span class="input-group-text">CNPJ</span>
                  <input type="text" id="cnpj" name = "cnpj" class="form-control" placeholder="CNPJ">
                </div>
              </div>
              <div class="col">
                <div class="input-group mb-3">
                  <span class="input-group-text">CPF*</span>
                  <input type="number" id="cpf" name = "cpf" class="form-control" placeholder="CPF" required="required">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="input-group mb-3">
                  <span class="input-group-text">Cidade*</span>
                  <input type="text" id="cidade"name = "cidade" class="form-control" placeholder="Cidade" required="required">
                </div>
              </div>
            <div class="col">
              <div class="input-group mb-3">
                <span class="input-group-text">Estado*</span>
                <input type="text" id="estado" name = "estado" class="form-control" placeholder="Estado" required="required">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="input-group mb-3">
                <span class="input-group-text">Modalidade*</span>
                <select name="modalidade" class="form-control">
                  <option value="cozinheiro ">Cozinheiro(a)</option>
                  <option value="churrasqueiro">Churrasqueiro(a)</option>
                  <option value="diarista">Diarista</option>
                  <option value="eletricista">Encanador</option>
                  <option value="0">Jardineiro</option>
                  <option value="1">DEV</option>
                </select>
              </div>
            </div>
            <div class="col">
              <div class="input-group mb-3">
                <span class="input-group-text">Telefone*</span>
                <input type="number" id="telefone" name = "telefone" class="form-control" placeholder="Telefone" required="required">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="input-group mb-3">
                <span class="input-group-text">Email*</span>
                <input type="text" name = "email" class="form-control" placeholder="Digite um email" required="required">
              </div>
            </div>
            <div class="col">
              <div class="input-group mb-3">
                <span class="input-group-text">Senha*</span>
                <input type="password" name = "senha" class="form-control" placeholder="Crie uma senha" required="required">
                <input type="hidden" id="tipo" name="tipo" value="prestador">
              </div>
            </div>
          </div>
          <br><br>
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
                  
  <!-- ======= Footer ======= -->
  <?php include '../rodape.php';?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
