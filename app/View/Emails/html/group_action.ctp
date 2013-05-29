<h2><?php echo $title; ?></h2>
<?php foreach ($membres as $membre) {
         echo $membre['Member']['titre']." ".$membre['Member']['nom']." ".$membre['Member']['prenom']." ".$membre['Member']['section']."<br>";
}
?>