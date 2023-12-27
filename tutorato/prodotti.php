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

.sx{
	width:25%;
	height:60%;
	margin-left: 1%;
	margin-top: -84%;
}

.bottonimenu {
	height:35px;
	width:150%;
	font-size:19px;
	border: 2px solid #D8D8D8;
	color: #345d7c;
	font-weight: bold;
	border-radius: 12px;
	background-color:white;
}

.bottonimenuselezionato {
	background-color:#D8D8D8;
	height:35px;
	width:150%;
	font-size:19px;
	border: 2px solid #D8D8D8;
	color: #345d7c;
	font-weight: bold;
	border-radius: 12px;
}

.bottonimenu:hover{
	transition-duration: 0.4s;
	color: white;
	background-color: #345d7c;
	box-shadow: 0 6px 13px 0 rgba(0,0,0,0.2), 0 4px 15px 0 rgba(0,0,0,0.19)
}

.prodotti {
	width: 70%;
	height: 100%;
	margin-left: 28%;
	margin-top: -28%;
}

.tabella {
	width: 100%;
}

#bollino {
	position: absolute;
	border-radius: 50%;
	width: 2%;
	height: 5%;
	background-color: #345d7c;
	margin-left: 16%;
	margin-top: -51%;
	color:gold;
	text-align: center;
	font-size:20px;
}

#bollino2 {
	position: absolute;
	width: 4%;
	height: 5%;
	background-color: #345d7c;
	margin-left: 11%;
	margin-bottom: 30%;
	color:gold;
	text-align: center;
	font-size:20px;
}	

.agg{
	border: 2px solid #345d7c;
	color: #345d7c;
	font-weight: bold;
	border-radius: 12px;
}

.ag{
	border: 2px solid #345d7c;
	color: gold;
	background-color: #345d7c;
	font-weight: bold;
	border-radius: 12px; 
}

.agg:hover {
	transition-duration: 0.4s;
	color: white;
	background-color: #345d7c;
}

.piumeno:visited, .piumeno:active, .piumeno:link {
	text-decoration: none;
	color: #345d7c;
	font-weight: bold;
	font-size: 25px;
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
<u>   PRODOTTI</u>   |
<a href="storico.php" class="menu">   STORICO   </a>
</p>
<p class="corpo">
<?php
include("connessione.php");
if (isset($_GET["pagamento"])) { //PAGAMENTO
	$prezzo=$_GET["prezzo"];
	echo("<form action='pagamento.php' method='post' style='font-size: 28px; width: 80%; height: 100%; margin-left: 11%; margin-top: -84%;'>
    <label>Nome:</label>
    <input type='text' name='nome' style=' font-size: 18px;' required>

    <label style='margin-left: 1%'>Cognome:</label>
    <input type='text' name='cognome' style=' font-size: 18px;' required>

    <label style='margin-left: 1%'>Data di Nascita:</label>
    <input type='date' name='data_nascita' style=' font-size: 18px;' required><br>
	
	<label>Codice Fiscale:</label>
    <input type='text' name='CF' style=' font-size: 18px;' required>

    <label style='margin-left: 1%'>Città:</label>
    <input type='text' name='paese' style=' font-size: 18px;' required><br/>

    <label>Via:</label>
    <input type='text' name='via' style=' font-size: 18px;' required>
	
	<label style='margin-left: 1%'>CAP:</label>
    <input type='text' name='cap' style=' font-size: 18px;' required><br/>

    <label>Numero di Telefono:</label>
    <input type='tel' name='telefono' style=' font-size: 18px;' required>");
	

	$oggi=date("Y-m-d");
	
	echo("<label style='margin-left: 1%'>Scegli una data di spedizione:</label>
    <input type='date' min='".date('Y-m-d', strtotime($oggi. ' + 2 days'))."' style=' font-size: 18px;' name='data_spedizione' required><br>

    <input type='submit' value='INVIA' class='agg' style='border-radius: 6px; font-size: 23px; width: 150px; height: 35px; margin-left: 40%; margin-top:1%'>
	</form>");
}
else {
echo("<p class='sx'><table>");
// PRIMO BOTTONE
if (isset($_GET["pc"])){
echo("<tr><td><input type='button' name='pc' value='COMPUTER PORTATILI' class='bottonimenuselezionato' disabled></td></tr>");
$query="select prodotti.id, prodotti.nome, prodotti.fornitore, prodotti.prezzo, prodotti.scorte
		from prodotti, categorie
		where categorie.id=prodotti.idcategoria and idcategoria=1
		order by fornitore";
}
else {
	echo("<tr><td><a href='prodotti.php?pc=si'><input type='button' name='pc' value='COMPUTER PORTATILI' class='bottonimenu'></a></td></tr>");
	}
// SECONDO BOTTONE
if (isset($_GET["stampanti"])){
echo("<tr><td><input type='button' name='stampanti' value='STAMPANTI' class='bottonimenuselezionato' disabled></td></tr>");
$query="select prodotti.id, prodotti.nome, prodotti.fornitore, prodotti.prezzo, prodotti.scorte
		from prodotti, categorie
		where categorie.id=prodotti.idcategoria and idcategoria=2
		order by fornitore";}
else {
	echo("<tr><td><a href='prodotti.php?stampanti=si'><input type='button' name='stampanti' value='STAMPANTI' class='bottonimenu'></a></td></tr>");
	}
// TERZO BOTTONE
if (isset($_GET["telefoni"])){
echo("<tr><td><input type='button' name='telefoni' value='TELEFONI' class='bottonimenuselezionato' disabled></td></tr>");
$query="select prodotti.id, prodotti.nome, prodotti.fornitore, prodotti.prezzo, prodotti.scorte
		from prodotti, categorie
		where categorie.id=prodotti.idcategoria and idcategoria=3
		order by fornitore";}
else {
	echo("<tr><td><a href='prodotti.php?telefoni=si'><input type='button' name='telefoni' value='TELEFONI' class='bottonimenu'></a></td></tr>");
	}
// QUARTO BOTTONE
if (isset($_GET["tastiere"])){
echo("<tr><td><input type='button' name='tastiere' value='TASTIERE' class='bottonimenuselezionato' disabled></td></tr>");
$query="select prodotti.id, prodotti.nome, prodotti.fornitore, prodotti.prezzo, prodotti.scorte
		from prodotti, categorie
		where categorie.id=prodotti.idcategoria and idcategoria=4
		order by fornitore";}
else {
	echo("<tr><td><a href='prodotti.php?tastiere=si'><input type='button' name='tastiere' value='TASTIERE' class='bottonimenu'></a></td></tr>");
	}
// QUINTO BOTTONE
if (isset($_GET["mouse"])){
echo("<tr><td><input type='button' name='mouse' value='MOUSE' class='bottonimenuselezionato' disabled></td></tr>");
$query="select prodotti.id, prodotti.nome, prodotti.fornitore, prodotti.prezzo, prodotti.scorte
		from prodotti, categorie
		where categorie.id=prodotti.idcategoria and idcategoria=5
		order by fornitore";}
else {
	echo("<tr><td><a href='prodotti.php?mouse=si'><input type='button' name='mouse' value='MOUSE' class='bottonimenu'></a></td></tr>");
	}
// SESTO BOTTONE
if (isset($_GET["hard"])){
echo("<tr><td><input type='button' name='hard' value='HARD DISK' class='bottonimenuselezionato' disabled></td></tr>");
$query="select prodotti.id, prodotti.nome, prodotti.fornitore, prodotti.prezzo, prodotti.scorte
		from prodotti, categorie
		where categorie.id=prodotti.idcategoria and idcategoria=6
		order by fornitore";}
else {
	echo("<tr><td><a href='prodotti.php?hard=si'><input type='button' name='hard' value='HARD DISK' class='bottonimenu'></a></td></tr>");
	}
// SETTIMO BOTTONE
if (isset($_GET["chiavette"])){
echo("<tr><td><input type='button' name='chiavette' value='CHIAVETTE' class='bottonimenuselezionato' disabled></td></tr>");
$query="select prodotti.id, prodotti.nome, prodotti.fornitore, prodotti.prezzo, prodotti.scorte
		from prodotti, categorie
		where categorie.id=prodotti.idcategoria and idcategoria=7
		order by fornitore";}
else {
	echo("<tr><td><a href='prodotti.php?chiavette=si'><input type='button' name='chiavette' value='CHIAVETTE' class='bottonimenu'></a></td></tr>");
	}
// OTTAVO BOTTONE
if (isset($_GET["wifi"])){
echo("<tr><td><input type='button' name='wifi' value='WIFI' class='bottonimenuselezionato' disabled></td></tr>");
$query="select prodotti.id, prodotti.nome, prodotti.fornitore, prodotti.prezzo, prodotti.scorte
		from prodotti, categorie
		where categorie.id=prodotti.idcategoria and idcategoria=8
		order by fornitore";}
else {
	echo("<tr><td><a href='prodotti.php?wifi=si'><input type='button' name='wifi' value='WIFI' class='bottonimenu'></a></td></tr>");
	}
// CHIUSURA TABELLA
echo("</table></p>");

if (isset($_GET["carrello"])){ // VISUALIZZA CARRELLO
if (isset($_GET["errore"])){
	?>
	    <script>
            alert("AL MOMENTO NON DISPONIAMO DEL NUMERO DI SCORTE RICHIESTE.");
    </script>
	<?php
}	
echo("<p class='prodotti'><br/><table class='tab' style='margin-left: 5%; margin-top:2%;'><th colspan='3' class='tab' style='background-color: #345d7c; color: white;'>CARRELLO</th>
<tr><td style='width: 25%; border-right: solid black;' class='tab'><u>PRODOTTO</u></td><td class='tab' style='width: 25%; border-right: solid black; border-left: solid black;'>
<u>PREZZO UNITARIO</u></td><td class='tab' style='width: 25%; border-left: solid black;'><u>QUANTITÀ</u></td></tr>");
$query8="select * from carrello;";
$ris8=mysqli_query($connessione, $query8);
$con=1;
while ($riga8=mysqli_fetch_array($ris8)){
	$query7="select id, nome, fornitore, prezzo, scorte from prodotti where id='".$riga8['idprodotto']."'";
	$ris7=mysqli_query($connessione, $query7);
	while ($riga7=mysqli_fetch_array($ris7)){
		$qtaa=$riga8['quantità']+1;
		$qtaaa=$riga8['quantità']-1;
		if ($con%2==0){
		echo("<tr><td class='tab'>".$riga7['nome']." - ".$riga7['fornitore']."</td><td class='tab'>".$riga7['prezzo'].
		"€</td><td class='tab'><a href='aggiungi.php?carrello&id=".$riga7['id']."&qta=".$qtaaa ."' class='piumeno' style='margin-right: 1%'>-   </a>  ".$riga8['quantità']."   
		<a href='aggiungi.php?carrello&id=".$riga7['id']."&qta=".$qtaa ."' class='piumeno' style='margin-left: 1%'>   +</a></td></tr>");
		}
		else {
		echo("<tr><td class='tab2'>".$riga7['nome']." - ".$riga7['fornitore']."</td><td class='tab2'>".$riga7['prezzo'].
		"€</td><td class='tab2'><a href='aggiungi.php?carrello&id=".$riga7['id']."&qta=".$qtaaa ."' class='piumeno' style='margin-right: 1%'>-   </a>  ".$riga8['quantità']."   
		<a href='aggiungi.php?carrello&id=".$riga7['id']."&qta=".$qtaa ."' class='piumeno' style='margin-left: 1%'>   +</a></td></tr>");
		}
		$prezzototale=$prezzototale+($riga7['prezzo']*$riga8['quantità']);
		$con++;
		
	}
}	
echo("<tr><td colspan='3' style='border-top-style: solid;	height: 35px;'>PREZZO TOTALE: ".$prezzototale."€
<a href='prodotti.php?pagamento&prezzo=".$prezzototale."'><input type='button' value='CONFERMA ORDINE' class='agg' style='border-radius: 6px; font-size: 17px; width: 270px; height: 25px; margin-left: 1%;'></a>
</td></tr></table>
</p>");
}
else {
// CARRELLO
$query3="select count(*) as cont
		 from carrello;";
$ris=mysqli_query($connessione, $query3);
while ($rig=mysqli_fetch_array($ris)){
	$contcarr=$rig["cont"];
}

?>
<p class="prodotti">
<?php
$risultato=mysqli_query($connessione, $query);
echo("<table class='tabella'>");
$cont=0;
while ($riga=mysqli_fetch_array($risultato)){
	if ($riga["scorte"]==0){
		$query0="delete from prodotti where id='".$riga["id"]."'";
		mysqli_query($connessione, $query0);
	}
	else 
	{
	if($cont == 3 || $cont == 6 || $cont == 9 || $cont == 12 || $cont == 15 || $cont == 0){
	echo("<tr><td style='width: 33%; height:20%'>");
	}
	else{
	echo("<td style='width: 33%; height:180px;'>");
	}
	
	echo("<input type='circle' id='bollino2' value='".$riga['scorte']."' disabled>");
	echo("<img src='immagini/".$riga['id'].".jpg' style='width:95px; height: 95px;'><br/><b>".$riga['nome'].'</b> - <u>'.$riga['fornitore'].'</u><br/>'.$riga['prezzo'].'€');
	
	$query9="select idprodotto from carrello;";
	$ris9=mysqli_query($connessione, $query9);
	$trovato="no";
	while ($riga9=mysqli_fetch_array($ris9)){
		if ($riga9["idprodotto"]==$riga['id']){
			$trovato="si";
		}
	}
	
	if ($trovato=="no"){
	echo("<br/><a href='aggiungi.php?id=".$riga['id']."&qta=1'><input class='agg' type='button' value='AGGIUNGI AL CARRELLO'></a><br/>");
	}
	else {
	echo("<br/><a href='aggiungi.php?id=".$riga['id']."&qta=1'><input class='ag' type='button' value='PRESENTE NEL CARRELLO' disabled></a><br/>");
	}
		
	if($cont == 2 || $cont == 5 || $cont == 8 || $cont == 11 || $cont == 14){
	echo("</td></tr>");	
	}
	else{
	echo("</td>");
	}
	$cont=$cont +1;
	}
}
echo("</table>");		
?>
</p>
<a href="prodotti.php?carrello"><img src="immagini/carrello.png" style="width: 5%; position: absolute; margin-top:-51%; margin-left: 12%;"></a>
<?php
echo("<input type='circle' id='bollino' value='$contcarr' disabled>");
}
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
</body>
</html>