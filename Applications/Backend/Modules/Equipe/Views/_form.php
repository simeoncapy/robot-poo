<form action="" method="post">
  <p> 
	<?php echo $form; ?>
<?php
if($existe)
{
?>
    <input type="submit" value="Modifier" name="modifier" />
<?php
}
else
{
?>
    <input type="submit" value="Ajouter" />
<?php
}
?>
  </p>
</form>