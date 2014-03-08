<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Cadastro</title>
</head>

<body>

	<?php

	$nome     =   $_POST['nome'];
	$telefone   =   $_POST['telefone'];
	$email  =   $_POST['email'];
	$sexo  =   $_POST['sexo'];
	$idioma =   $_POST['idioma'];

	$headers  = "From: $email\r\n";
	$headers .= "Reply-To: $email\r\n";


	$corpo = "Formulário enviado com sucesso! obrigado.\n";


	$email_to = 'robson_jl@hotmail.com';

	$status = mail($email_to, $subject, $corpo, $headers);

	if($status) {
		echo "<script> alert('Formulário enviado com sucesso.'); </script>";
		{
			echo "<script> alert('Falha ao enviar o Formulário.'); </script>";
		}


		if($nome !=""){
			echo "<script> alert('Por favor preencha o campo nome!');
		}
			
		?>

		</body>

		</html>
