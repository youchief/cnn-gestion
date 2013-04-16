<STYLE type="text/css">
	.tableTd {
	   	border-width: 0.5pt; 
		border: solid; 
	}
	.tableTdContent{
		border-width: 0.5pt; 
		border: solid;
	}
	#titles{
		font-weight: bolder;
	}
   
</STYLE>

<?php
	$this->layout = 'xls';
?>

<table>
	<tr>
		<td><b>Section <?php echo $data[0]['Section']['nom']?> du Cercle des Nageurs de Nyon<b></td>
	</tr>
	<tr>
		<td><b>Date:</b></td>
		<td><?php echo date("F j, Y, g:i a"); ?></td>
	</tr>
	<tr>
		<td><b>Membres:</b></td>
		<td style="text-align:left"><?php echo count($data);?></td>
	</tr>
	<tr>
		<td></td>
	</tr>
		<tr id="titles">
			<td class="tableTd">titre</td>
			<td class="tableTd">prenom</td>
			<td class="tableTd">nom</td>
			<td class="tableTd">adresse</td>
			<td class="tableTd">npa</td>
			<td class="tableTd">ville</td>
			<td class="tableTd">date_de_naissance</td>
			<td class="tableTd">private_phone</td>
			<td class="tableTd">pro_phone</td>
			<td class="tableTd">mobile_phone</td>
			<td class="tableTd">email</td>
			<td class="tableTd">sexe</td>
			<td class="tableTd">entree_club</td>
			<td class="tableTd">Section</td>
			<td class="tableTd">mbre_tri</td>
			<td class="tableTd">categorie</td>
			<td class="tableTd">groupe</td>
			<td class="tableTd">ct</td>
			<td class="tableTd">adm/demission</td>
			<td class="tableTd">arbitre</td>
			<td class="tableTd">licence</td>
			<td class="tableTd">status</td>
			<td class="tableTd">comite</td>
			<td class="tableTd">ancien_comite</td>
			<td class="tableTd">en_conge</td>
			<td class="tableTd">moniteur</td>
			<td class="tableTd">entraineur</td>
			<td class="tableTd">en_test</td>
			<td class="tableTd">sans_cotisation</td>
			<td class="tableTd">delai</td>
			<td class="tableTd">bus</td>
			<td class="tableTd">avs</td>
			<td class="tableTd">sss</td>
			<td class="tableTd">js</td>
			<td class="tableTd">profession</td>
		</tr>		
		<?php foreach($data as $row):
			echo '<tr>';
			echo '<td class="tableTdContent">'.$row['Member']['titre'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['prenom'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['nom'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['adresse'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['npa'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['ville'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['date_de_naissance'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['private_phone'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['pro_phone'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['mobile_phone'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['email'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['sexe'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['entree_club'].'</td>';
			echo '<td class="tableTdContent">'.$row['Section']['nom'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['mbre_tri'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['categorie'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['groupe'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['ct'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['adm/demission'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['arbitre'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['licence'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['status'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['comite'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['ancien_comite'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['en_conge'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['moniteur'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['entraineur'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['en_test'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['sans_cotisation'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['delai'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['bus'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['avs'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['sss'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['js'].'</td>';
			echo '<td class="tableTdContent">'.$row['Member']['profession'].'</td>';
			echo '</tr>';
			endforeach;
		?>
</table>

