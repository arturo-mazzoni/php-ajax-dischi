<main>
    <div class="container">
      <?php foreach($array as $item){ ?>
              <div class="box">
                <h2> <?php echo $item["title"] ?> </h2>
                <h4> <?php echo $item["artist"] ?> </h4>
                <img src="img/<?php echo $item["cover"] ?>" alt="cover">
              </div>
      <?php } ?>
    </div>
  </main>