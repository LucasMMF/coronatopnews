<?php
	$name = $_POST['nome'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$comentario = $_POST['comentario'];
	$to = "mateusmidao@gmail.com";
	$subject = "CORONA NEWS - MSG";
	$body = "Nome: " .$name;
	$body .= "\nTelefone: " .$tel;
	$body .= "\nEmail: " .$email;
	$body .= "\nComentario: \n" .$comentario;
	mail ($to,$subject,$body);
	$redirect = "https://coronatopnews.netlify.app/contato2.html";
	header("location:$redirect");
?>