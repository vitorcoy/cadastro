<?php
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	
	$id = $nome; // Suponha que id foi gerado aleatoriamente. Poderia ser um número.
	
        echo $nome;
        echo $email;
                
	echo "Voce está cadastrado. Chame os seus amigos e ganhe pontos.";
	echo "Para isso, é só passar o link abaixo:";
	echo "http://localhost:8081/cadastro/index.php?id=". $id; 
?>