<?php 

session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['username'])) {
    // Usuário não autenticado, redirecione para a página de login
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="logo/unicampCor.png" />
	<title>Tela Relatório</title>

	<style>	
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			background-color: rgb(0, 127, 130);
			
		}
		.navbar1 {
			background-color: rgb(10, 96, 102);
			color: #fff;
			padding: 1px;
			position: relative;
			display:contents;
			justify-content: space-between;
		}
		.navbar1 button {
			position: absolute;
			top: 10px;
			right: 10px;
			margin-right: 10px
		}
		.navbar-header h5{
			margin-left: 20px;
		}
		.navbar-header{
			display: flex;
			align-items: center;
		}
		.navbar-header div {
			float: right;
		}
		form {
			margin: 25px;
			padding: 125px;
			background-color: rgb(0, 127, 130);
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px rgb(255, 255, 255);
		}
		form label {
			display: block;
			margin-top: 10px;
			margin-bottom: 5px;
			font-weight: bold;
		}
		form input, form select {
			width: 100%;
			padding: 10px;
			border: none;
			border-radius: 5px;
			margin-bottom: 20px;
			font-size: 16px;
		}
		form textarea {
			width: 100%;
			padding: 10px;
			border: none;
			border-radius: 5px;
			margin-bottom: 20px;
			font-size: 16px;
			resize: none;
		}
		
		.buttonred {
		  color: #fff;
		  background-color: rgb(10, 96, 102);
		
		  padding: 20px 25px;
		  border: none;
		  border-radius: 5px;
		}
		.buttonred:hover {
		  background-color: rgb(212, 42, 42);
		  padding: 20px 25px;
		  border: none;
		  border-radius: 5px;
		}
		form button {
			background-color: rgb(10, 96, 102);
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 16px;
			cursor: pointer;
		}
		/CSS DATAS/
		
		h1 {
	  text-align: center;
	}
	
	.delivery-date {
	  display: flex;
	  justify-content: center;
	  align-items: center;
	  margin-top: 20px;
	}
	
	.delivery-date label {
	  margin-right: 10px;
	}
	
	.delivery-date input[type="date"] {
	  padding: 8px;
	  font-size: 16px;
	  border-radius: 4px;
	  border: 1px solid #ccc;
	}
	
	.delivery-date input[type="date"]::before {
	  content: attr(placeholder);
	  color: #999;
	}
	
	.delivery-date input[type="date"]:focus::before,
	.delivery-date input[type="date"]:valid::before {
	  display: none;
	}
	
	.delivery-date input[type="button"] {
	  padding: 10px 20px;
	  background-color: rgb(212, 42, 42);
	  color: #fff;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	  font-size: 16px;
	}
	.estilo{
		color: #ffffff;
	
	}
		</style>
	
</head>
<body>	
	<!--navbar-->
  
	<nav class="navbar1">
	  <div class="navbar-header">
  
  
  
  <img class="estilo" src="https://www.virandobixo.com.br/img/unicamp.png"> 
  
	  </div>
	
	  <button class="buttonred" onclick="window.location.href='index.php'">Voltar</button>
  </nav>
  </div>
  <div>
		<form class="estilo">
			<h2>Selecione qual o conteúdo do relatório desejado :</h2>
			<label for="produto">Categoria:</label>
			<select id="produto" name="produto" required>
				<option value="">Selecione um filtro</option>
				<option value="produto1">Hidraulica</option>
				<option value="produto2">Elétrica</option>
				<option value="produto3">Cabeamento</option>
				<option value="produto3">Estrutura (Aço,concreto,alvenaria...) </option>
				<option value="produto3">Cobertura</option>
				<option value="produto3">Impermeabilidade</option>
				<option value="produto3">SPDA</option>
				<option value="produto3">Pintura</option>
				<option value="produto3">Climatização</option>
				<option value="produto3">Pavimentação</option>
			</select>
				
		<label for="Periodo">Periodo:</label>
		<select id="Periodo" name="Periodo">
			<option value="mensal">Mensal</option>
			<option value="semestral">Semestral</option>
		</select>
		
		<label for="data">Data do Pedido:</label>
				<div class="delivery-date">
				  
				  <input type="date" id="delivery" placeholder="" required>
				  
				  <input type="button" value="Solicitar"onclick="window.location.href='RelatórioPdf.html'" >
				</div>
			</div>