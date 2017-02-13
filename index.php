<!doctype html>
<html lang="pt-br">

<head>

	<link href="eleicao.css" rel="stylesheet" type="text/css">

	<?php 

	$page_name = 'Eleições na UFPA';
	$page_description = 'Confira as entrevistas que a Rádio Web UFPA fez com os candidatos à reitoria da UFPA. Veja outras informações sobre as eleições de 2016 da UFPA.';
	$page_tags = 'eleicoes ufpa, eleicoes reitor ufpa, candidatos reitores ufpa, propostas reitores ufpa, entrevistas reitores ufpa';
	$color = '#b9162d';
	$image_icon = 'http://radio.ufpa.br/eleicao-ufpa/_images/icon.png';
	$image_share = 'http://radio.ufpa.br/eleicao-ufpa/_images/share.png';

	include '../_includes/head.php';
 
	?>

</head>

<body>

	<?php 

	include '../_includes/header.php'; 

	include '../_includes/share.php';
	 
	?>


    <section class="full-screen img-votacao">

    	<div class="full-screen-container background-2">

    		<img src="_images/eleicoes-ufpa-logo.png" width="720px" alt="logo eleições ufpa">

	        <!-- <h1 class="title">Eleições na UFPA</h1> -->

	        <div>
<!-- 			    <audio controls autoplay>
				  <source src="http://www2.radio.ufpa.br/aovivo" type="audio/mpeg"/>
				</audio> -->
				<audio id="player" src="#" type="audio/mp3" controls autoplay></audio>
			</div>

	        <a href="#content" id="scroll-button" class="color-1"></a>

		</div>

    </section>

    <section id="content">

		<h2 class="text-1">Entrevista com reitor eleito</h2>

		<div class="tile tile-play">

			<div class="large-tile">
				<figure class="img-emmanuel-tourinho"></figure>
				<a href="#" id="play" onclick="playAudio('UFPA_ENTREVISTA__EMANUEL_TOURINHO.mp3');">
					<h3>Entrevista com Emmanuel Tourinho</h3>
				</a>
			</div>

		</div>

    </section>


    <section id="content">

		<h2 class="text-1">Debate Reitoria UFPA</h2>

		<div class="tile tile-play">

			<div class="large-tile">
				<figure class="img-debate"></figure>
				<a href="#" id="play" onclick="playAudio('ELEICOES_NA_UFPA__DEBATE_REITORIA_UFPA.mp3');">
					<h3>Debate Reitoria UFPA</h3>
				</a>
			</div>

		</div>

    </section>


   	<section id="content">

		<h2 class="text-1">Entrevistas com os candidatos à Reitoria da UFPA</h2>

		<div class="tile tile-play">

			<div class="quad-tile">
				<figure class="img-edson-ortiz"></figure>
				<a href="#" id="play" onclick="playAudio('ELEICOES_NA_UFPA__EDSON_ORTIZ.mp3');">
					<h3>Edson Ortiz</h3>
				</a>
			</div>

			<div class="quad-tile">
				<figure class="img-emmanuel-tourinho"></figure>
				<a href="#" id="play" onclick="playAudio('ELEICOES_NA_UFPA__EMANUEL_TOURINHO.mp3');">
					<h3>Emmanuel Tourinho</h3>
				</a>
			</div>

			<div class="quad-tile">
				<figure class="img-erick-pedreira"></figure>
				<a href="#" id="play" onclick="playAudio('ELEICOES_NA_UFPA__ERIK_PEDREIRA.mp3');">
					<h3>Erick Pedreira</h3>
				</a>
			</div>

			<div class="quad-tile">
				<figure class="img-joao-weyl"></figure>
				<a href="#" id="play" onclick="playAudio('ELEICOES_NA_UFPA__JOAO_WEYL.mp3');">
					<h3>João Weyl</h3>
				</a>
			</div>

			<div class="quad-tile">
				<figure class="img-vera-jacob"></figure>
				<a href="#" id="play" onclick="playAudio('ELEICOES_NA_UFPA__VERA_JACOB.mp3');">
					<h3>Vera Jacob</h3>
				</a>
			</div>

		</div>

    </section>


    <section>

    <h2 class="text-1">Temas</h2>

		<div class="tile tile-play">

			<div class="large-tile">
				<figure class="img-estudantes"></figure>
				<a href="#" id="play" onclick="playAudio('ELEICOES_NA_UFPA__ASSISTENCIA_ESTUDANTIL.mp3');">
					<h3>Assistência Estudantil</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-extensao"></figure>
				<a href="#" id="play" onclick="playAudio('ELEICOES_NA_UFPA__EXTENSAO.mp3');">
					<h3>Extensão</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-infra"></figure>
				<a href="#" id="play" onclick="playAudio('ELEICOES_NA_UFPA__INFRAESTRUTURA_E_ACESSIBILIDADE.mp3');">
					<h3>Infraestrutura e Acessibilidade</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-metas"></figure>
				<a href="#" id="play" onclick="playAudio('ELEICOES_NA_UFPA__PROPOSTAS_E_METAS.mp3');">
					<h3>Propostas e Metas</h3>
				</a>
			</div>

			<div class="large-tile">
				<figure class="img-rh"></figure>
				<a href="#" id="play" onclick="playAudio('ELEICOES_NA_UFPA__RECURSOS_HUMANOS.mp3');">
					<h3>Recursos Humanos</h3>
				</a>
			</div>

		</div>
    	

    </section>



	<?php include '../_includes/footer.php'; ?>
		

<!-- Scripts -->

<script>
	
function playAudio(file)
    {
    var audio = file;
    if(audio !== '') {
    document.getElementById('player').src = 'http://radio.ufpa.br/media/audio/eleicao-ufpa/'+audio;
    }
    else {

    }
}
</script>

<script src="http://radio.ufpa.br/_scripts/functions.js" type="text/javascript"></script>
<script src="http://radio.ufpa.br/_scripts/menu.js" type="text/javascript"></script>
<script src="http://radio.ufpa.br/_scripts/header.js" type="text/javascript"></script>
<script src="http://radio.ufpa.br/_scripts/scroll.js" type="text/javascript"></script>

</body>
</html>