<?php
	$jours = array (1 => 'Lundi' , 
					2=> 'Mardi', 
					3=> 'Mercredi', 
					4=> 'Jeudi', 
					5=> 'Vendredi', 
					6=> 'Samedi', 
					7=> 'Dimanche');
					
	$Lundi = array ('je dors' , 'je dors' , 'je dors' , 'je dors' , 'je dors' , 
					'je dors' ,	'je dors' , 'je me l�ve et me pr�pare' ,
					'je vais au lyc�e' , 'cours de 9h � 10h' ,
					'cours de 10h � 11h' , 'cours de 11h � 12h' ,
					'repas de midi' , 'cours de 13h � 14h' , 
					'cours de 14h � 15h' , 'cours de 15h � 16h' , 
					'cours de 16h � 17h' , 'je rentre chez moi' , 
					'je fais mes devoirs' ,'je d�ne' , 'je regarde la t�l�' , 
					'je regarde la t�l�' , 'je regarde la t�l�' , 'Je me couche');
					
	$Mardi = array ('je dors' , 'je dors' , 'je dors' , 'je dors' , 'je dors' , 
					'je dors' ,	'je dors' , 'je me l�ve et me pr�pare' ,
					'je vais au lyc�e' , 'cours de 9h � 10h' ,
					'cours de 10h � 11h' , 'cours de 11h � 12h' ,
					'repas de midi' , 'cours de 13h � 14h' , 
					'cours de 14h � 15h' , 'cours de 15h � 16h' , 
					'cours de 16h � 17h' , 'je rentre chez moi' , 
					'je fais mes devoirs' ,'je d�ne' , 'je regarde la t�l�' , 
					'je regarde la t�l�' , 'je regarde la t�l�' , 'Je me couche');
					
	$Mercredi = array ('je dors' , 'je dors' , 'je dors' , 'je dors' , 'je dors' , 
					'je dors' ,	'je dors' , 'je me l�ve et me pr�pare' ,
					'je vais au lyc�e' , 'cours de 9h � 10h' ,
					'cours de 10h � 11h' , 'cours de 11h � 12h' ,
					'repas de midi' , 'cours de 13h � 14h' , 
					'cours de 14h � 15h' , 'cours de 15h � 16h' , 
					'cours de 16h � 17h' , 'je rentre chez moi' , 
					'je fais mes devoirs' ,'je d�ne' , 'je regarde la t�l�' , 
					'je regarde la t�l�' , 'je regarde la t�l�' , 'Je me couche');
					
	$Jeudi = array ('je dors' , 'je dors' , 'je dors' , 'je dors' , 'je dors' , 
					'je dors' ,	'je dors' , 'je me l�ve et me pr�pare' ,
					'je vais au lyc�e' , 'cours de 9h � 10h' ,
					'cours de 10h � 11h' , 'cours de 11h � 12h' ,
					'repas de midi' , 'cours de 13h � 14h' , 
					'cours de 14h � 15h' , 'cours de 15h � 16h' , 
					'cours de 16h � 17h' , 'je rentre chez moi' , 
					'je fais mes devoirs' ,'je d�ne' , 'je regarde la t�l�' , 
					'je regarde la t�l�' , 'je regarde la t�l�' , 'Je me couche');
					
	$Vendredi = array ('je dors' , 'je dors' , 'je dors' , 'je dors' , 'je dors' , 
					'je dors' ,	'je dors' , 'je me l�ve et me pr�pare' ,
					'je vais au lyc�e' , 'cours de 9h � 10h' ,
					'cours de 10h � 11h' , 'cours de 11h � 12h' ,
					'repas de midi' , 'cours de 13h � 14h' , 
					'cours de 14h � 15h' , 'cours de 15h � 16h' , 
					'cours de 16h � 17h' , 'je rentre chez moi' , 
					'je fais mes devoirs' ,'je d�ne' , 'je regarde la t�l�' , 
					'je regarde la t�l�' , 'je regarde la t�l�' , 'Je me couche');

	$Samedi = array ('je dors' , 'je dors' , 'je dors' , 'je dors' , 'je dors' , 
					'je dors' ,	'je dors' , 'je me l�ve et me pr�pare' ,
					'je vais au lyc�e' , 'cours de 9h � 10h' ,
					'cours de 10h � 11h' , 'cours de 11h � 12h' ,
					'repas de midi' , 'cours de 13h � 14h' , 
					'cours de 14h � 15h' , 'cours de 15h � 16h' , 
					'cours de 16h � 17h' , 'je rentre chez moi' , 
					'je fais mes devoirs' ,'je d�ne' , 'je regarde la t�l�' , 
					'je regarde la t�l�' , 'je regarde la t�l�' , 'Je me couche');
					
	$Dimanche = array ('je dors' , 'je dors' , 'je dors' , 'je dors' , 'je dors' , 
					'je dors' ,	'je dors' , 'je me l�ve et me pr�pare' ,
					'je vais au lyc�e' , 'cours de 9h � 10h' ,
					'cours de 10h � 11h' , 'cours de 11h � 12h' ,
					'repas de midi' , 'cours de 13h � 14h' , 
					'cours de 14h � 15h' , 'cours de 15h � 16h' , 
					'cours de 16h � 17h' , 'je rentre chez moi' , 
					'je fais mes devoirs' ,'je d�ne' , 'je regarde la t�l�' , 
					'je regarde la t�l�' , 'je regarde la t�l�' , 'Je me couche');

	/*echo('<tr>');
	for($i=1; $i<=7; $i++){
		echo('<td>'.$jours[$i].'</td>');
	}
	echo('</tr>');
	for($i=0; $i<=23; $i++){
		echo('<tr>');
		for($j=1; $j<=7; $j++){
			echo('<td>'.${$jours[$j]}[$i].'</td>');
		}
		echo('</tr>');
	}*/
	for ($j=$_GET["Jdebut"];$j<=$_GET["Jfin"]; $j++)
	for ($i=$_GET["min"];$i<=$_GET["max"];$i++){
		echo $i.' : '.$Lundi[$i].'<br />';
	}
	
	
?>