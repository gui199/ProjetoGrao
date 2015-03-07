<!DOCTYPE HTML>
<html>
	<link type="text/css" rel="stylesheet" href="style.css">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Formulario de Contato</title>
	</head>
	<body>
		<header class="main">
			<h1>Formulario Teste</h1>
		</header>
		<section class="main">
    <?php
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];
       $from = 'From: Teste';
       $to = 'gui1@ymail.com';
       $subject = 'Opa !';

       $body = "From: $name\n E-Mail: $email\n Mensagem:\n $message";

       if ($_POST['submit']) {
           if (mail ($to, $subject, $body, $from)) {
           echo '<p>Mandando mensagem !!</p>';
           } else {
           echo '<p>Ah! Try again, please?</p>';
           }
       }
    ?>
			<form method="post" action="index.php">
				<label>Seu nome:</label>
				<input name="name" placeholder="Aqui">
				<label>Seu Email::</label>
				<input name="email" type="email" placeholder="Aqui">
				<label>Mensagem:</label>
				<textarea name="message" placeholder="Aqui"></textarea>
				<input id="submit" name="submit" type="submit" value="Submit">
			</form>
		</section>
	</body>
</html>
