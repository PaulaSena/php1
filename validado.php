<?php
    
//$url ="https://bi.vidaclass.com.br/utils";

?>
<?php 


    $vcpf=$_POST["cpf"];

    echo "CPF:$vcpf  Validado! <br><br>";
  ?>


  <!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>

</script>

</head>
<body>

Do retorno obtido exibir na tela:<br>

<br>

<form>
   <label> Nome </label>
<input type="text" name="nome"><br><br>

   <label>Email</label>
<input type="Email" name="email"><br><br>
   
   <label>Telefone</label>
<input type="number" name="tel"><br><br>

<label> Possui alguma compra em saude</label><br>

<input type="radio" name="S"> Sim
<input type="radio" name="N">Não <br><br>


<label>Se tem compra em saude: </label>

<input type="radio" name="s"> Sim 
<input type="radio" name="n">Não <br>
<label>Quantas compras: (5) ex.</label>
<input type="number" name="qtdc"><br><br>



<label>Se tem farma: </label>

<input type="radio" name="s"> Sim
<input type="radio" name="n">Não <br><br>

<label>Se tem dependente:  </label>
<input type="radio" name="s"> Sim
<input type="radio" name="n">Não <br>

<label> Qtd. de dependentes: (2) ex. </label>
<input type="number" name="qtdd">
<br><br>


Obtem o token para consumir os endpoints;
<input type="checkbox" name="token">
</form>


</body>
</html>