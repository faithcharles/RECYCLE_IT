<?php  if (count($errors) > 0) : ?>
  
  	<?php foreach ($errors as $error):
        echo "<p>$error</p>";
    endforeach; ?>
 
<?php  endif ?>