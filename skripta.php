<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Projekt</title>
  </head>
  <body>
  <header class="header">
      <img src="img/logo.jpg" />
      <nav>
        <ul>
          <li><a href="index.php">Naslovna</a></li>
        <li><a href="unos.php">Unos</a></li>
          <li><a href="kategorija.php?id=sport">Sport</a></li>
          <li><a href="kategorija.php?id=politika">Politika</a></li>
          <li><a href="administracija.php">Administracija</a></li>
        </ul>
      </nav>
    </header>

<div class="wrapper">

    <?php
    include 'connect.php';
    if (isset($_POST['naslov']) && isset($_POST['sazetak']) && isset($_POST['tekst']) && isset($_FILES['slika']) && isset($_POST['kategorija'])) {
        $datum = date("d.m.Y.");
        $naslov = $_POST['naslov'];
        $sazetak = $_POST['sazetak'];
        $tekst = $_POST['tekst'];
        $slika = $_FILES['slika']['name'];
        $kategorija = $_POST['kategorija'];
        if (isset($_POST['arhiva'])) {
            $arhiva = 1;
        } else {
            $arhiva = 0;
        }

        $target = 'img/' . $slika;
        move_uploaded_file($_FILES["slika"]["tmp_name"], $target);

        $query = "INSERT INTO clanak (datum, naslov, sazetak, tekst, slika, kategorija, arhiva) VALUES ('$datum', '$naslov', '$sazetak', '$tekst', '$slika', '$kategorija', '$arhiva')";

        $result = mysqli_query($dbc, $query) or die('Error querying database.');
        mysqli_close($dbc);
    }
    ?>


    <article>
      <h2 class="naslov-clanka"><?php echo $_POST['naslov']; ?></h2>
      <img src="img/<?php echo $slika; ?>" class="slika-clanka" />

      <p>
        <?php 
            echo $_POST['tekst']
        ?>
      </p>
    </article>

</div>
    <footer>
      <p>Tin Milković</p>
    </footer>
  </body>
</html>