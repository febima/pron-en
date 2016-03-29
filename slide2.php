<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Slide Show com jQuery</title>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		#slide {
			width: 800px;
			height: 530px;
			overflow: hidden;
			margin: 50px auto;
			-webkit-box-shadow: 0 0 8px rgb(0, 0, 0);
			-moz-box-shadow: 0 0 8px rgb(0, 0, 0);
			-ms-box-shadow: 0 0 8px rgb(0, 0, 0);
			-o-box-shadow: 0 0 8px rgb(0, 0, 0);
			box-shadow: 0 0 8px rgb(0, 0, 0);
			position: relative;
		}
		#slide img {
			position: absolute;
			z-index: 1;
			display: none;
			left: 0
		}
		#slide p {
			z-index: 2;
			position: absolute;
			bottom: 0;
			left: 0;
			width: 100%;
			padding: 10px;
			font-family: Arial;
			font-size: 14px;
			background: rgba(0, 0, 0, 0.5);
			color: #fff;
		}
	</style>
	<script type="text/javascript">
			//aqui deixamos a 1ª imagem a mostra
		 //e add uma classe a ela
		$(document).ready(function () {
			$("#slide img:eq(0)").addClass("ativo").show();
		});

		 //com esse código nós inserimos uma tag <p>
		var texto = $(".ativo").attr("alt");
		$("#slide").prepend("<p>" + "Motos ùnicas e customizadas" + "</p>");

		 //intervalo da função
		setInterval(slide, 3000);

		 //função slide
		function slide() {
			//aqui vai o código do nosso slide
			if ($(".ativo").next().size()) {
				/* se houver, escondemos a imagem em um efeito de fadeOut
				 * e retiramos a classe ".ativo" da imagem atual
				 * capturamos a tage que vem em seguida e fazemos ela aparecer com efeito fadeIn
				 * inserimos na imagem seguinte a classe ".ativo"
				 */
				$(".ativo").fadeOut().removeClass("ativo").next().fadeIn().addClass("ativo");
			} else {
				/* se não, irá retornar ao estado inicial do slide
				 * retiramos a classe ".ativo" e procuramos pela 1ª imagem do slide
				 * add novamente a classe ".ativo" na 1ª imagem
				 */
				$(".ativo").fadeOut().removeClass("ativo");
				$("#slide img:eq(0)").fadeIn().addClass("ativo");
				/* agora faremos um código para guardar o texto da legenda dentro de uma váriavel
				 * escondemos a legenda de forma mais direta(rápida)
				 * colocaremos o texta da váriavel "texto"
				 * e exibiremos após meio segundo
				 */
				$("#slide p").hide().html(texto).delay(500).fadeIn();

			}
		};
	</script>
</head>

<body>

	<figure id="slide">
		<img src="images/action-bg.jpg" alt="Moto Customizada" />
		<img src="images/Lighthouse.jpg" alt="Moto Customizada" />
		<img src="images/action-bg.jpg" alt="Moto Customizada" />
		<img src="images/Lighthouse.jpg" alt="Moto Customizada" />
	</figure>

	<script type="text/javascript" src="min/js/jquery.min.js">
	</script>
</body>

</html>