<?php echo $this->Form->create('Member', array('action'=>'search', 'class'=>'form-inline'), array('class'=>'form-search'));?>
  <input type="text" class="input-small" name="data[Member][nom]" placeholder="Nom">
  <input type="text" class="input-small" name="data[Member][prenom]" placeholder="Prenom">
  <button type="submit" class="btn">Rechercher</button>
</form>