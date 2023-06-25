<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Članak</title>
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
          <li><a href="administrator.php">Administracija</a></li>
        </ul>
      </nav>
    </header>

    <div class="wrapper">
      <article>
        <?php
          include 'connect.php';
          define('UPLPATH', 'img/');

          if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT * FROM clanak WHERE id='$id'";
            $result = mysqli_query($dbc, $query);
            $row = mysqli_fetch_array($result);

            echo '<h2 class="naslov-clanka">' . $row['naslov'] . '</h2>';
            echo '<img src="' . UPLPATH . $row['slika'] . '" class="slika-clanka" />';
            echo '<p class="sazetak">' . $row['sazetak'] . '</p>';
            echo '<div class="datum">Objavljeno ' . $row['datum'] . '</div>';
            echo '<p>' . $row['tekst'] . '</p>';
          }
        ?>
      </article>
    </div>

    <footer class="footer">
      <p>Tin Milković</p>
    </footer>
  </body>
</html>
