
<h1><?php echo $old_value['nom']." ".$old_value['prenom'] ?> Section : <?php echo $section; ?> a été modifié par <?php echo $user['User']['username'] ?></h1>

<h2>Modifications</h2>
<?php

foreach ($old_value as $key => $value) {
        foreach ($member as $key2 => $value2) {
                if ($key == $key2) {
                        echo "<b>".$key."</b> :  " . $value2 . " <b>-></b> " . $value.'<br>';
                }
        }
}
?>