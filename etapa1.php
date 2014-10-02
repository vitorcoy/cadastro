<?php
 $nome = $_POST["nome"];
 $email = $_POST["email"]; 
 $profissao = $_POST["profissao"];
 $datanascimento = $_POST["datanascimento"];
 $erro = 0;
 
 
 if (empty($nome) OR strstr($nome, ' ')== FALSE) {
    $mensagem = "Favor digitar seu nome corretamente.<br>"; 
    $erro=1;
 }
 
 if (strlen($email) < 8 || strstr($email, '@') == FALSE) {
    $mensagem = "Favor digitar o seu e-mail corretamente.<br>";
    $erro=1;
 }
 
 if (empty($profissao) == FALSE) {
    $mensagem = "Favor digitar sua profissão.<br>"; 
    $erro=1;
 }
 
 if (empty($datanascimento) == FALSE) {
    $mensagem = "Favor digitar sua profissão.<br>"; 
    $erro=1;
 }
 
 
 if ($erro==0) {
    $mensagem = "Todos os campos foram digitados corretamente.";
 }


?>


<html>
<head> 
	<title>Desenvolvendo Websites com PHP</title> 
	<meta charset="UTF-8">
</head>
<body> 
	<p align="center"><big><big>
		<strong>Cadastramento - Etapa 1 de 3</strong></big></big>
	</p> 
	
	<form method="POST" action="etapa2.php"> 
 		<div align="center">
			<center> 
				<p>Nome: <input type="text" name="nome" size="20"></p>
			</center>
		</div>
		<div align="center">
			<center> 
				<p>E-mail: <input type="text" name="email" size="20"></p> 
 			</center>
		</div>
		<div align="center">
			<center> 
				<p>Data de nascimento: <input type="text" name="datanascimento" size="20"></p> 
 			</center>
		</div>
		<div align="center">
			<center> 
				<p> 
					Sexo: 
					<input type="radio" value="masculino" checked name="sexo">Masculino&nbsp;&nbsp; 
					<input type="radio" name="sexo" value="feminino">Feminino
				</p> 
 			</center>
		</div>
		<div align="center">
			<center> 
				<p>
					Profissão: <input type="text" name="profissao" size="20">
				</p> 
 			</center>
		</div>
		<div align="center">
			<center>
				<p>	
					<input type="submit" value="Prosseguir &gt;&gt;" name="prosseguir">
				</p> 
 			</center>
		</div> 
	</form> 
                    <?php echo $mensagem ?>
</body> 
</html> 