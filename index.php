<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php include("cabecalho.php");

 ?>

         

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/01.png" alt="Image">
        <div class="carousel-caption">
         
        </div>      
      </div>

      <div class="item">
        <img src="img/02.png" alt="Image">
        <div class="carousel-caption">
         
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>Sejam Bem Vindos!</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="http://code.education.s3.amazonaws.com/banners/banner-fb1.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Site simples Code Education</p>
    </div>
    <div class="col-sm-4"> 
      <img src="http://code.education.s3.amazonaws.com/banners/banner-fb1.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Aprendendo PHP</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Em breve</p>
      </div>
      <div class="well">
       <p>Em breve</p>
      </div>
      <div class="well">
       <p>Em breve</p>
      </div>
      <div class="well">
       <p>Em breve</p>
      </div>
    </div>
  </div>
</div><br>


            </div>
        <?php include("rodape.php");

 ?>