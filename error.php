
 <?php  if (count($errors) > 0) : ?>

  <div class="error">
  		<P>Mr./Mrs <?php echo $Fname; echo " "; echo $Lname; ?></P>
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>

  </div>
<?php  endif ?>