<h1>Un membre a été ajouté par <?php echo $user['User']['username']?></h1>
<div class="members view">
	<?php
		foreach( $member as $key => $value ){
			echo "<b>".$key."</b> : "; 
			echo $value; 
			echo "<br />";
		}	
	?>
</div>
