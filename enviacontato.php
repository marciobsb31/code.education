<?php include("cabecalho.php");

 ?>

<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
$assunto = $_GET['assunto'];
$mensagem = $_GET['mensagem'];

?>

<p>


 
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/loja.css">
    <script src="js/bootstrap.js"></script>


            </div>
          </div>

          <h2 class="sub-header">Dados recebidos com sucesso</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Assunto</th>
                  <th>Mensagem</th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $nome; ?></td>
                  <td><?php echo $email; ?></td>
                  <td><?php echo $assunto; ?></td>
                  <td><?php echo $mensagem; ?></td>                  
                </tr>
