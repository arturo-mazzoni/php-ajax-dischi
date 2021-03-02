<?php
  $array = [
    [
      "title" => "back to black",
      "artist" => "amy winehouse",
      "cover" => "AmyWinehouse_BackToBlack.jpg"
    ],
    [
      "title" => "in utero",
      "artist" => "nirvana",
      "cover" => "inUteroNirvana.jpg"
    ],
    [
      "title" => "nevermind",
      "artist" => "nirvana",
      "cover" => "NirvanaNevermind.jpg"
    ],
    [
      "title" => "bollicine",
      "artist" => "vasco",
      "cover" => "BollicineVasco.jpg"
    ],
    [
      "title" => "indestructible",
      "artist" => "rancid",
      "cover" => "IndestructibleRancid.jpg"
    ],
    [
      "title" => "And out come the wolves",
      "artist" => "rancid",
      "cover" => "RancidAndOutCometheWolves.jpg"
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

  <header>
    <img src="img/spotifyLogo.jpg" alt="logo">
  </header>

  <main>
    <div class="container">
      <div class="box">
        <?php foreach($array as $item){ ?>
                <h2> <?php echo $item["title"] ?> </h2>
                <h4> <?php echo $item["artist"] ?> </h4>
                <img src="img/<?php echo $item["cover"] ?>" alt="cover">
        <?php } ?>
      </div>
    </div>
  </main>


  <footer></footer>


  <script src="dist/script.js" charset="utf-8"></script>
</body>
</html>
