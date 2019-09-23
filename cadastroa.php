<?php
    
//$url ="https://bi.vidaclass.com.br/utils";

//$ch =curl_init($url);

    $vcpf=$_POST["cpf"];

    echo "CPF: ".$vcpf;




  ?>

  <!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
<script type="text/javascript">
	

		function validandocpf(){

      alert("CPF Validado".$vcpf);


			return false 
		}

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


Se tem compra em saude: 

<input type="radio" name="S"> Sim <br>

<label>Quantas compras: (5) ex.</label>
<input type="number" name="Qtdc">
<input type="radio" name="N">Não <br><br>


<label>Se tem farma: </label>
<input type="radio" name="S"> Sim
<input type="radio" name="N">Não <br><br>

<label>Se tem dependente:  </label>
<input type="radio" name="S"> Sim
<input type="radio" name="N">Não <br>

<label> Qtd. de dependentes: (2) ex. </label>
<input type="number" name="Qtdd">
<br><br>


Obtem o token para consumir os endpoints;
<input type="checkbox" name="token">
</form>


</body>
</html>