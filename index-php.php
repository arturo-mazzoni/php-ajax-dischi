<?php
  $array = [
    [
      "title" => "in utero",
      "artist" => "nirvana",
      "cover" => ""
    ],
    [
      "title" => "nevermind",
      "artist" => "nirvana",
      "cover" => ""
    ],
    [
      "title" => "back to black",
      "artist" => "amy winehouse",
      "cover" => ""
    ],
    [
      "title" => "bollicine",
      "artist" => "vasco",
      "cover" => ""
    ],
    [
      "title" => "indestructible",
      "artist" => "rancid",
      "cover" => ""
    ],
    [
      "title" => "And out come the wolves",
      "artist" => "rancid",
      "cover" => ""
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/style.css">
  <title>Document</title>
</head>
<body>

  <?php foreach($array as $item){ ?>
          <h2> <?php echo $item ?> </h2>
  <?php } ?>

  <script src="dist/script.js" charset="utf-8"></script>
</body>
</html>
