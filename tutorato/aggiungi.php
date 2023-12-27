<?php
$id=$_GET["id"];
// AGGIUNGI AL CARRELLO
include("connessione.php");
$qta=$_GET["qta"];
if (isset($_GET["carrello"])){ // -1 QTA
	if ($qta==0){
			$query="delete from carrello where idprodotto='".$id."'";
			mysqli_query($connessione, $query);
			header("location:prodotti.php?carrello");
	}
	else{ // +1 QTA
	$query2="select scorte from prodotti where id='".$id."'";
	$ris=mysqli_query($connessione, $query2);
	while ($riga=mysqli_fetch_array($ris)){
		$scorte=$riga["scorte"];
	}
	if ($qta>$scorte){ // NON ABBASTANZA SCORTE
		header("location:prodotti.php?carrello&errore");
	}
	else {
	$query="UPDATE carrello SET quantità='".$qta."' WHERE idprodotto='".$id."'";
	mysqli_query($connessione, $query);
	header("location:prodotti.php?carrello");
	}
	}
}
else { // AGGIUNGERE AL CARRELLO
$query="INSERT INTO carrello
VALUES ($id, $qta);";
mysqli_query($connessione, $query);
$query2="select categorie.id 
from categorie, prodotti
where prodotti.id=".$id." and categorie.id=prodotti.idcategoria;"; // TORNARE ALLA PAGINA PRODOTTI E STESSA CATEGORIA
$risul=mysqli_query($connessione, $query2);
while ($rig=mysqli_fetch_array($risul)){ 
	 if ($rig["id"]==1){
	 header("location:prodotti.php?pc=si"); 
	 }
	 else {
		 if ($rig["id"]==2) {
			 header("location:prodotti.php?stampanti=si");
		 }
		 else {
			 if ($rig["id"]==3) {
				header("location:prodotti.php?telefoni=si");
		 }
		 else {
			 if ($rig["id"]==4) {
				 	header("location:prodotti.php?tastiere=si");
			 }
			 else {
				if ($rig["id"]==5){
					 header("location:prodotti.php?mouse=si");	 
				 }
				 else {
					 if ($rig["id"]==6){
					 header("location:prodotti.php?hard=si");
					}
					 else {
						 if ($rig["id"]==7) {
						 header("location:prodotti.php?chiavette=si");		 
						 }
						 else {
							 header("location:prodotti.php?wifi=si");
	 
						 }
					 }
				 }
			 }
		 }
	 }
}
}
}
?>