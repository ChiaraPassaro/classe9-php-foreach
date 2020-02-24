<?php
// $books = [
//   'Il piccolo principe',
//   'Pinocchio',
//   'Peter Pan'
// ];

$books = [
  'yu98yu9j' => [
    'title' => 'Il piccolo principe',
    'pages' => 200
  ],
  '7gh990' => [
    'title' => 'Pinocchio',
    'pages' => 200
  ],
  'j908hj08h' => [
    'title' => 'Peter Pan',
    'pages' => 200
  ],
];

$books['7gh990']['pages'] = 300;

foreach ($books as $book) {
  echo $book['title'];

  foreach ($book as $key => $value) {
    // if($key == 'title') {
    //   echo $value;
    // }
    echo $key . ' ' . $value;
  }
} 

die();

// $books = [
//   'yu98yu9j' => 'Il piccolo principe',
//   '7gh990' => 'Pinocchio',
//   'j908hj08h' => 'Peter Pan'
// ];

// var_dump($books);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <ul>
    <?php foreach ($books as $k => $book) { ?>
      <li><?php echo $k ?> - <?php echo $book ?></li>
    <?php } ?>
  </ul>
</body>

</html>