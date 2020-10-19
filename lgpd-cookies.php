<?php 
if(isset($_GET['accept-cookies'])) {
	setcookie('accept-cookies', 'true', time() + (30 * 24 * 3600));
	header('Location: ./');
}	
?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<title>Document</title>
	<meta charset="UTF-8">	
	<link rel="stylesheet" href="cookies-acpt.css">
</head>

<body>

		<?php 
		if(!isset($_COOKIE['accept-cookies'])) {
		?>
		<div class="cookie-accept" >

			<div class="container">
				<p>
					A A7B Investimentos utiliza cookies e outras tecnologias semelhantes para melhorar a sua
					experiência.<br>Ao continuar navegando, você concorda com estas condições.
				</p>
				<div class="acpt">
					<a href="?accept-cookies" class="acp-btn">Aceito</a>
				</div>

			</div>
		</div>

		<?php 
		}
		?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
			if($('.cookie-accept').length) {
				$('.cookie-accept').slideDown(400);
			}
		</script>


</body>

</html>