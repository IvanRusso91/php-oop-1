
<?php

  require_once __DIR__ .'/movie/movie.php';

  $movies=[];

  $primo_movie = new Movie('Cloud atlas', 'Tom Tykwer');
  $primo_movie->setGenere(['Lana e Lilly Wachowski','drammatico','fantascienza']);

  $movies[]= $primo_movie;

  $secondo_movie = new Movie('Deadpool','Tim Miller');
  $secondo_movie->setGenere(['azione', 'commedia', 'thriller', 'avventura', 'fantascienza']);

  $movies[]= $secondo_movie;

  $terzo_movie = new Movie('Il diavolo veste Prada', 'David Frankel');
  $terzo_movie->setGenere(['commedia','drammatico', 'sentimentale']);

  $movies[]= $terzo_movie;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php foreach($movies as $movie) :?>
    <h1>Titolo : <?php echo $movie->titolo ?></h1>
    <h2> Regista :<?php echo $movie->regista ?></h2>
    <h3>Generi:</h3>
    <ul>
      <?php foreach($movie->getGenere() as $genere) :?>
      <li><?php echo $genere?></li>
      <?php endforeach?>
    </ul>
  <?php endforeach; ?>
</body>
</html>