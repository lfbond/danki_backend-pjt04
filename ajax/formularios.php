<?php
	include('../config.php');
	$data = array();
	$assunto = 'Novo mensagem do site!';
	$corpo = '';
	foreach ($_POST as $key => $value) {
		$corpo.=ucfirst($key).": ".$value;
		$corpo.="<hr>";
	}
	$info = array('assunto'=>$assunto,'corpo'=>$corpo);
	$mail = new Email('vps.dankicode.com','testes@dankicode.com','gui123456','Guilherme');
	$mail->addAdress('contato@dankicode.com','Guilherme');
	$mail->formatarEmail($info);
	if($mail->enviarEmail()){
		$data['sucesso'] = true;
	}else{
		$data['erro'] = true;
	}

	die(json_encode($data));


	//SCRIPT PHP DE ENVIO DE FORMULÁRIO COMPLETO!!!!!!!!

	/* if(isset($_POST['acao']) && $_POST['identificador'] == 'form_home'){
		//Enviei o formulário.
		if($_POST['email'] != ''){
			$email = $_POST['email'];
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				//tudo certo, é um email esto.
				//Só enviar.
				$mail = new Email('vps.dankicode.com','testes@dankicode.com','gui123456','Bond-aluno');
				$mail->addAdress('contato@dankicode.com','Bond-aluno');

				$corpo = "E-mail cadastrado na home do site: <hr>$email";
				$info = array('assunto'=>'Um novo e-mail cadastrado no site!','corpo'=>$corpo);
				$mail->formatarEmail($info);
				if($mail->enviarEmail()){
					echo'<script>alert("Enviado com sucesso")</script>';
				}else{
					echo'<script>alert("Algo deu erro")</script>';
				}

			}else{
				echo'<script>alert("Não é um e-mail valido")</script>';
			}

		}else{
			echo'<script>alert("Campos vázios não são permitidos!")</script>';
		}

	}else if(isset($_POST['acao']) && $_POST['identificador'] == 'form_contato'){
	
		<-- $nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];
		$telefone = $_POST['telefone']; -->

		$assunto = $_POST['Nova mensagem do site!'];
		$corpo = $_POST[''];
		foreach ($_POST as $key => $value) {
			$corpo.=ucfirst($key).": ".$value;
			$corpo.="<hr>";
		}
		$info = array('assunto'=>$assunto,'corpo'=>$corpo);
		$mail = new Email('vps.dankicode.com','testes@dankicode.com','gui123456','Bond-aluno');
		$mail->addAdress('contato@dankicode.com','Bond-aluno');
		$mail->formatarEmail($info);
		if($mail->enviarEmail()){
			echo'<script>alert("Enviado com sucesso")</script>';
		}else{
			echo'<script>alert("Algo deu erro")</script>';
		}
	} */
?>