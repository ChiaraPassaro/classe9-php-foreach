<?php 
  $error = 'Errore di connessione';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  // if(!empty($error)) { 
  //   echo '<div class="alert">' . $error . '</div>';
  // } ?>

  <?php if (!empty($error)) { ?>
    <div class="alert"> <?php echo $error; ?> </div>
  <?php }  ?>
 

  <ul>
    <?php for ($i = 0; $i < 5; $i++) { ?>
      <li>elemento</li>
    <?php } ?>
  </ul>
</body>

</html>