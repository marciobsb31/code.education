<?php include ("cabecalho.php")?>

<body>

           
            <div class="principal">

        <form action="enviacontato.php" class="panel panel-primary" method="get">
            <div class="panel-heading" ><h1 >Contato</h1></div>
                <div class="jubotron">
                
          <div class="input-group">     
 <label for="comment">Nome:</label>
  <input type="text" class="form-control" placeholder="Digite seu nome" name="nome" aria-describedby="basic-addon1" required>
</div><p>
    <div class="input-group">
  <label for="comment">E-mail:</label>
  <input type="mail" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1" required>
</div><p>
 <div class="input-group">
 <label for="comment">Assunto:</label>
  <input type="mail" class="form-control" placeholder="Assunto" name="assunto" aria-describedby="basic-addon1" required>
</div><p>
 <div class="form-group">
  <label for="comment">Mensagem:</label>
  <textarea class="form-control" rows="5" id="mensagem" name="mensagem" ></textarea><br>
   <input type="submit" class="btn btn-lg btn-primary" value="Enviar"> 
</div>
</div>
 

  
</div><p>
</div>
                
                    

                </div>

            </form>
</body>
<?php include ("rodape.php")?>
