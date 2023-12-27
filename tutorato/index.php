<html>
<head>
<meta charset="utf-8">
<style>
body {
	width: 100%;
	margin-left:0px;
}

#logo {
      width: 100%;
      height: 25%;
	  margin-left:0%;
    }

#insegna {
	font-size: 93px;
	color: #345d7c;
	position: absolute;
	top: -8%;
	margin-left: 15%;
	width: 72%;
	text-align: center;
}

#img {
	width:10%;
	height: 100%;
	margin-left: 1%;
}

#img2 {
	width:10%;
	height: 100%;
	margin-left: 89%;
	margin-top: -11%;
}

#m{
	font-size: 40px;
	position: absolute;
	margin-top: -62px;
	color: #345d7c;
	margin-left: 12%;
	width: 1069px;
	text-align: center;
}

.table {
	color:white;
	width:90%; 
	height:100%;
	border-collapse: collapse;
	margin-left: 2%;
}

td {
	text-align: center;
	font-size:23px;
	vertical-align: middle;
	height: 26%;
}

th {
	font-size:29px;
	height: 22%;
}

.menu {
	color: #345d7c;
}

.menu:visited, .menu:active, .menu:link {
	text-decoration: none;
}

#mu:visited, #mu:active, #mu:link {
	text-decoration: none;
	color: #345d7c;
	font-size: 24px;
	line-height: 1.5;

}

.menu:hover{
	transition-duration: 0.4s;
	color: gold;
}

.piedipagina {
	text-align: center;
	margin-top: 18%;
	background-color:#345d7c;
	color: white;
	background-color: #345d7c;
	height: 40%;
}

#luogo {
	width:30%;
	height: 36%;
	margin-top: -17%;
	height: 100%;
	}

#contatti {
	width:30%;
	height: 36%;
	position: absolute;
	margin-left: 32%;
	margin-top: -17%;
}
#social {
	width:30%;
	margin-top: -17%;
	height: 36%;
	position: absolute;
	margin-left: 62%;
}

.corpo {
	width: 90%;
	height: 190%;
	margin-left:5%;
}

#prod {
	position: relative;
	height: 75%; 
	width: 38%; 
	margin-left: 6%;
	margin-top: -56%;
	font-size: 24px;
	line-height: 1.5;
	padding-left: 2%;
	border-radius: 8px;
	color: #345d7c;
	background-color: #DFDFDF;
}

#serv{
	position: relative;
	height: 93%; 
	width: 44%; 
	background-color: green;
	margin-left: 49%;
	margin-top: -62%;
	font-size: 24px;
	line-height: 2;
	padding-left: 2%;
	color: white;
	background-color: #345d7c;
	border-radius: 8px;
}

.bottone {
	transition-duration: 0.4s;
	width: 90%;
	height: 8%;
	text-align: center; 
	margin-top:2%;
	background-color: white;
	color: #345d7c;
	border-radius: 8px;
	font-size: 20px;
}

.bottone:hover {
  background-color: gold;
  color: white;
}

.bottone2 {
	transition-duration: 0.4s;
	width: 90%;
	height: 8%;
	text-align: center; 
	margin-top:2%;
	color: white;
	background-color: #345d7c;
	border-radius: 8px;
	font-size: 20px;
}

.bottone2:hover {
  background-color: gold;
  color: #345d7c;
}
</style>
</head>
<body>
<p id="logo" style="background-image:url('immagini/sfondo.jpg');">
<img src="immagini/logo.png" id="img">
<img src="immagini/logo2.png" id="img2">
<H1 id="insegna">
AD TECHNOLOGY
</H1></p>
<p id="m">
<u>   HOME</u>   |
<a href="prodotti.php"class="menu">   PRODOTTI</a>   |
<a href="storico.php" class="menu">   STORICO   </a>
</p>
<p class="corpo">
<?php 
if (isset($_GET["ordinefatto"])) { //ORDINE FATTO
		?>
	    <script>
            alert("IL SUO ORDINE È STATO EFFETTUATO CON SUCCESSO!");
    </script>
	<?php
}
?>
<img src="immagini/info2.jpg" style="width: 40%; position: relative; margin-top: 2%; margin-left: 3%;">

<P id="prod"><b style="font-size: 48px;">I NOSTRI PRODOTTI</b>
<br/><a href="prodotti.php?pc=1" id="mu"> - Computer Portatili</a>
<br/><a href="prodotti.php?stampanti=2" id="mu"> - Stampanti</a>
<br/><a href="prodotti.php?telefoni=3" id="mu"> - Telefoni</a>
<br/><a href="prodotti.php?tastiere=4" id="mu"> - Tastiere</a>
<br/><a href="prodotti.php?mouse=5" id="mu"> - Mouse</a>
<br/><a href="prodotti.php?hard=6" id="mu"> - Hard Disk</a>
<br/><a href="prodotti.php?chiavette=7" id="mu"> - Chiavette</a>
<br/><a href="prodotti.php?wifi=8" id="mu"> - Wifi</a>
<br/><a href="prodotti.php"><input class="bottone2" type="button" value="VAI ALLA SEZIONE PRODOTTI" style="width: 500px;"></a>
</p>
<p id="serv">
<b style="font-size: 48px;">I NOSTRI SERVIZI</b>
<br/> - Riparazione Telefoni
<br/> - Riparazione Hardware
<br/> - Installazione e Configurazione Software
<br/> - Upgrade Hardware
<br/> - Recupero Dati Hard Disk
<br/> - Pulizia e Manutenzione Interna 
<br/> - Pulizia Virus e Spyware
<br/> - Ricariche Telefonche 
<br/><a href="mailto:Adtechnology@gmail.com?subject=Richiesta+informazioni+sui+servizi+offerti"><input type="button" class="bottone" value="PER OGNI RICHIESTA O CURIOSITA' CONTATTACI"></a>
</p>
<img src="immagini/info.jpg" style="width: 44%; position: relative; margin-top: 0%; margin-left: 50%;">
</p>
<p class="piedipagina">
<table class="table" id="luogo">
<tr><th colspan="2">LUOGO</th></tr>
<tr><td><img src="immagini/luogo2.png" style="width: 30%; margin-left: 50%;"></td><td style="width:62%; text-align: left;">Villa D'Almè (BG) <br/> 24018</td></tr>
<tr><td><img src="immagini/luogo.png" style="width: 33%; margin-left: 65%;"></td><td style="width:62%; text-align: left;">Via Papa Giovanni XXIII 60</td></tr>
</table>
<table class="table" id="contatti">
<tr><th colspan="2">CONTATTI</th></tr>
<tr><td><img src="immagini/contatti.png" style="width: 22%; margin-left: 65%; margin-bottom: 10px;"></td><td style="width:62%; text-align: left; font-size: 24px;">035541319</td></tr>
<tr><td><img src="immagini/contatti2.png" style="width: 22%; margin-left: 65%"></td><td style="width:62%; text-align: left; font-size: 24px;">3420462405</td></tr>
<tr><td><img src="immagini/contatti3.png" style="width: 22%; margin-left: 65%"></td><td style="width:62%; text-align: left;">Adtechnology@gmail.com</td></tr>
</table>
<table class="table" id="social">
<tr><th colspan="2">SOCIAL</th></tr>
<tr><td><img src="immagini/social.png" style="width: 22%; margin-left: 70%;"></td><td style="width:62%; text-align: left;">ADTechnology</td></tr>
<tr><td><img src="immagini/social2.png" style="width: 22%; margin-left: 70%;"></td><td style="width:62%; text-align: left;">ADTechnology_official</td></tr>
<tr><td><img src="immagini/social3.png" style="width: 22%; margin-left: 70%;"></td><td style="width:62%; text-align: left;">officialADTechnology</td></tr>
</table>
</p>

<?php
include("connessione.php");
$query="select idprodotto from carrello;";
$ris=mysqli_query($connessione, $query);
while ($riga=mysqli_fetch_array($ris)){
	$query2="delete from carrello where idprodotto='".$riga["idprodotto"]."'";
	$risultato=mysqli_query($connessione, $query2);
}
?>
</body>
</html>