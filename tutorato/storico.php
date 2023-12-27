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

.menu:hover{
	transition-duration: 0.4s;
	color: gold;
}

.piedipagina {
	text-align: center;
	margin-top: 41%;
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

.agg{
	border: 2px solid black;
	color: black;
	font-weight: bold;
	border-radius: 12px;
}

.agg:hover {
	transition-duration: 0.4s;
	color: white;
	background-color: #345d7c;
}

.tab {
	border-collapse: collapse;
	height: 35px;
}

.tab2 {
	border-collapse: collapse;
	background-color: Gainsboro;
	height: 35px;
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
<a href="index.php"class="menu">   HOME</a>   |
<a href="prodotti.php"class="menu">   PRODOTTI</a>   |
<u>   STORICO   </u>
</p>
<p class="corpo">
<?php
$oggi=date('d-m-Y');
echo("<form method='GET' style='font-size: 28px; width: 60%; height: 100%; margin-left: 23%; margin-top: -84%;'>
	<label>Numero di clienti soddisfatti fino al <u>$oggi</u>: ");
	include("connessione.php");
	$query="select count(cf) as num from clienti";
	$ris=mysqli_query($connessione, $query);
	while ($riga=mysqli_fetch_array($ris)){
		echo($riga['num'].".</label><br/>");
	}
	echo("<label>Numero di ordini effettuati fino al <u>$oggi</u>: ");
	$query="select max(id) as num from ordini";
	$ris=mysqli_query($connessione, $query);
	while ($riga=mysqli_fetch_array($ris)){
		echo($riga['num'].".</label>");
	}
	echo("</label><br/>
    <label>Inserisci il tuo Codice Fiscale:</label>
    <input type='tel' name='cf' value='".$cf."' style='margin-left: 1%; font-size: 18px;' font-size: 18px;' required>	
    <input type='submit' value='CONFERMA' class='agg' style='border-radius: 6px; font-size: 23px; width: 150px; height: 35px; margin-left: 1%; margin-top:1%'>
	</form>");
	
	if (isset($_GET["cf"])){
		$cf=$_GET["cf"];
		echo("<table style='width: 80%; margin-left: 10%; margin-top: -37%';><tr><th style='background-color: #345d7c; color: white; border-right: solid white; width: 30%' class='tab'>PRODOTTI</th>
		<th style='background-color: #345d7c; color: white; width: 12%' class='tab'>PREZZO UNITARIO</th>
		<th style='background-color: #345d7c; color: white; width: 12%' class='tab'>QUANTITÀ</th><th style='background-color: #345d7c; color: white; width: 12%' class='tab'>
		DATA</th><th style='background-color: #345d7c; color: white; width: 12%' class='tab'>DATA SPEDIZIONE</th></tr>");
		$query1="select prodotti.nome, prodotti.fornitore, prodotti.prezzo, dett_ordini.quantita, ordini.data, ordini.datasped
				 from clienti, ordini, dett_ordini, prodotti
				 where clienti.cf='".$cf."' and ordini.cf=clienti.cf and ordini.id=dett_ordini.idordine and dett_ordini.idprodotto=prodotti.id";
		$ris1=mysqli_query($connessione, $query1);
		$con1=1;
		while ($riga1=mysqli_fetch_array($ris1)){
		if ($con%2==0){
		echo("<tr style='height: 35px;' class='tab'><td>".$riga1["nome"]." - ".$riga1["fornitore"]."</td><td>".$riga1["prezzo"]."€</td><td>".$riga1["quantita"]."</td><td>".$riga1["data"]."</td><td>".$riga1["datasped"]."</td></tr>");
		}
		else {
		echo("<tr style='height: 35px;' class='tab2'><td>".$riga1["nome"]." - ".$riga1["fornitore"]."</td><td>".$riga1["prezzo"]."€</td><td>".$riga1["quantita"]."</td><td>".$riga1["data"]."</td><td>".$riga1["datasped"]."</td></tr>");
		}
		$con++;	
	}
echo("</table>");	
	}	
?>
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