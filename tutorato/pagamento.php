<?php
$nome=$_POST["nome"];
$nome=strtoupper($nome);
$cognome=$_POST["cognome"];
$cognome=strtoupper($cognome);
$datanascita=$_POST["data_nascita"];
$cf=$_POST["CF"];
$citta=$_POST["paese"];
$via=$_POST["via"];
$cap=$_POST["cap"];
$numtel=$_POST["telefono"];
$datasped=$_POST["data_spedizione"];
$oggi=date("Y-m-d");

include("connessione.php");
$query="select cf from clienti";
$ce="no";
$ris=mysqli_query($connessione, $query);
while ($riga=mysqli_fetch_array($ris)){
if ($riga["cf"]==$cf){
	$ce="si";
}
}
if ($ce!=="si"){ // NON è NOSTRO CLIENTE QUINDI AGGIUNGIAMO
	$query2="INSERT INTO clienti (cf, nome, cognome, nascita, citta, via, cap, telefono)
			 VALUES ('$cf', '$nome', '$cognome', '$datanascita', '$citta', '$via', '$cap', '$numtel');";
	echo($query2);		 
	mysqli_query($connessione, $query2);
}

// AGGIUNGI ORDINI
	$query3="INSERT INTO ordini (cf, data, datasped)
			 VALUES ('$cf', '$oggi', '$datasped');";
	echo($query3);
	mysqli_query($connessione, $query3);


// AGGIUNGI DETT_ORDINI
	$query5="SELECT id from ORDINI where cf='$cf' and data='$oggi'";
	echo($query5);
	$ris5=mysqli_query($connessione, $query5);
	while ($riga5=mysqli_fetch_array($ris5)){
		$query6="select idprodotto, quantità from carrello";
		echo($query6);
		$ris6=mysqli_query($connessione, $query6);
		while ($riga6=mysqli_fetch_array($ris6)){
		$query4="INSERT INTO dett_ordini (idordine, idprodotto, quantita, sconto)
				 VALUES ('".$riga5["id"]."', '".$riga6["idprodotto"]."', '".$riga6["quantità"]."', '0');";
		echo($query4);
		$query7="select scorte from prodotti where id='".$riga6["idprodotto"]."'";
		echo($query7);
		$ris7=mysqli_query($connessione, $query7);
		while ($riga7=mysqli_fetch_array($ris7)){
			$scorta=$riga7["scorte"]-$riga6["quantità"];
			$query8="UPDATE prodotti SET scorte='".$scorta."' where id='".$riga6["idprodotto"]."'";
			echo($query8);
			mysqli_query($connessione, $query8);
		}
	}
	}
	mysqli_query($connessione, $query4);
	
// AGGIORNA QTA PRODOTTI	
	header("location: index.php?ordinefatto");
?>