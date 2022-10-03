<!DOCTYPE html>
<html>
<head>
	<title>Layout Aula 7</title>
</head>
<body>
	<?php include 'layout/topo.php'; ?>
	<?php include 'layout/menu.php'; ?>
	<section>Banner</section>
	<main>
		<h1>Bem Vindo!</h1>
		<?php
			$x = 10;
			$soma = 10 + $x;
		?>
		<p>Seu sorriso é tão resplandescente, que deixou meu coração alegre.</p>
		<h2><?php echo $soma; ?></h2>
	</main>
	<?php include 'layout/rodape.php'; ?>
	
</body>
</html>