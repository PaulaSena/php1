<?php
    

    $vcpf=$_GET[f_cpf];




  ?>

  <?php

  if(!isset ($_POST["pagina"])){
  	echo "<center>Pagina não encontrada!"
  	exit();

  }
    $pagina=$_POST["pagina"];
  ?>


  <?php

  if(!isset ($_POST["cpf"])){
  	echo "<center>Cpf não encontrado!"
  	exit();

  }
    $pagina=$_POST["cpf"];
  ?>

--------------------
  <?php

  $cpf =isset($_POST["cpf"])?$_POST["cpf"]: "Nao validado";
  	echo "<center>Cpf não encontrado!"
  

  }
    $pagina=$_POST["cpf"];
  ?>

