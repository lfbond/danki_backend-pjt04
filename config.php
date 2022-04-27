<?php 

	$autoload = function($class){
		if($class == 'Email'){
			include('classes/phpmailer/PHPMailerAutoload.php');
		}
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);

	define('INCLUDE_PATH','http://localhost:8080/Projetos_Estudos/02-Cursos_danki/02-CursoDesenvolvimentoWEBCompleto/01-Projetos/Projeto03-CriandoSiteDinamico-JavaScript-JQueryPHP/');

?>