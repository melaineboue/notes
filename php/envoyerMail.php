function envoyer_email(){
	
	$Destinataires = get_option('inscription_mail_recever', 'nom.prenom@example.com').', '.$mailAdherent;
	$subject = "une nouvelle inscription: " . $nom  . " " . $prenom;
	$entetes = "Content-type: text/html; charset=utf-8\n";
	$corp = '
		<html>
			<head>
				<title>
					Une nouvelle inscritpion au nec
				</title>
			</head>
			<body>
				<table>
					<caption><h2 style = "background-color: white;">Une nouvelle personne souhaite s\'inscrire</h2></caption>
					<tr><td>clé de réference à rappeler lors du paiement :</td><td>'.$cleUnique.'</td></tr>
					<tr><th colspan="2" style = "background-color: yellow;">ETAT CIVIL</th></tr>
					<tr><td>Nom :</td><td>' . $nom  . '</td></tr>
					<tr style = "background-color: #f2f2f2"><td>Prénom :</td><td>' . $prenom  . '</td></tr>
					<tr style = "background-color: #f2f2f2"><td>Lieu d\'exercice de l\'activité :</td><td>' . $lieu  . '</td></tr>
					<tr><td>Profil choisit :</td><td>' . $profil  . '</td></tr>
					<tr style = "background-color: #f2f2f2"><td>Arme(s) pratiquée(s) :</td><td>' . $arme  . '</td></tr>
					<tr><td>Bras :</td><td>' . $bras  . '</td></tr>
				</table>
				</br>
				<table style = "border-collapse: collapse">
					<caption>Abonnement</caption>
					<tr>
						<td colspan="2" style="border: 2px solid black; font-weight: bold; text-align: center;"> Activité choisie</td>
					</tr>
					<tr>
						<td style = "border: 2px solid black; border-right: 1px solid black; font-weight: bold"><strong>Total</strong></td>
						<td style = "border: 2px solid black; border-left: 1px solid black; font-weight: bold">' . $Total  . '</td>
						<td style = "background-color: white; border: none"></td>						
					</tr>
				</table>
			</body>
			<style>
				tr:nth-child(even) {background-color: #f2f2f2;}	
				.stotright {border: 2px solid black; border-left: 1px solid black; font-weight: bold}
				.select{background-color: white; border: none;}
			</style>		
		</html>';
		
	mail($Destinataires, $subject, $corp, $entetes);
	
	wp_die();
}
