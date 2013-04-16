
<h1>Un membre a été modifié par <?php echo $user['User']['username'] ?></h1>
<h2>Anciennes valeurs</h2>
<div class="members view">
        <?php
        foreach ($member as $key => $value) {
                echo "<b>" . $key . "</b> : ";
                echo $value;
                echo "<br />";
        }
        ?>
</div>

<h2>Nouvellles valeurs</h2>
<?php
foreach ($old_value as $key => $value) {
        echo "<b>" . $key . "</b> : ";
        echo $value;
        echo "<br />";
}
?>