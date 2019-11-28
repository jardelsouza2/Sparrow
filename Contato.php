<!doctype html>
<html lang="pt-br" class="h-100">

<head>
  <?php require_once 'shared/header.php' ?>
  <title>Sparrow Events - Home</title>
</head>

<body class="d-flex flex-column h-100">

  <?php require_once 'shared/nav.php' ?>

  <div class="row">
    <!--mapa do sesi-->
    <div class="container-fluid">
      <iframe style="border:0; width: 100%;"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d481652.72381144424!2d-40.32447556864597!3d-19.416211943648456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb628aa4674e73f%3A0xb1e5bd7adb87b443!2sSenai!5e0!3m2!1spt-BR!2sbr!4v1574807364217!5m2!1spt-BR!2sbr"
        height="234" frameborder="0" allowfullscreen=""></iframe>
    </div>
  </div>
  <!--#region container principal-->
  <main role="main" class="flex-shrink-0 mb-5">
    <div class="container">
      <!-- Conteúdo principal -->
      <form action="" class="needs-validation" novalidate>
        <div class="row">
          <div class="col-sm-12">
            <fieldset>
              <legend>Formulario de Contato</legend>
              <!--input nome-->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" name="inputNome" id="nome" required>
                  </div>
                </div>
              </div>
              <!--input email e telefone-->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="inputEmail" id="emial" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="telefone">Telefone Celular</label>
                    <input class="form-control celular_ddd" type="text" name="inputTelefone" id="telefone" required>
                  </div>
                </div>
              </div>
              <!--input assunto-->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="assunto">Assunto</label>
                    <input class="form-control" type="text" name="inputAssunto" id="assunto" required>
                  </div>
                </div>
              </div>
              <!--input mensagem-->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" type="text" name="inputMensagem" id="mensagem" required></textarea>
                  </div>
                </div>
              </div>
              <!--botoes-->
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-success">Enviar Mensagem</button>
                  <button type="reset" class="btn btn-link">Limpar Formulário</button>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
      </form>
    </div>
  </main>


  <?php require_once 'shared/footer.php' ?>

  <?php require_once 'shared/scripts.php' ?>

</body>

</html>