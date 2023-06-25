<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" type="text/css">
  <title>Kategorija</title>
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
    <?php
    include 'connect.php';
    define('UPLPATH', 'img/');

    if (isset($_GET['id'])) {
      $kategorija = $_GET['id'];
    }
    ?>

    <?php
    if (isset($kategorija)) {
      echo '<h2 class="kategorija-naslov">' . ucfirst($kategorija) . '</h2>';

      echo '<div class="red-clanaka">';

      $query = "SELECT * FROM clanak WHERE kategorija='$kategorija'";
      $result = mysqli_query($dbc, $query);
      $count = 0;

      while ($row = mysqli_fetch_array($result)) {
        if ($count % 3 === 0 && $count !== 0) {
          echo '</div><div class="red-clanaka">';
        }

        echo '<div class="clanak-box">';
        echo '<a href="clanak.php?id=' . $row['id'] . '">';
        echo '<img class="clanak-img" src="' . UPLPATH . $row['slika'] . '" />';
        echo '<h3 class="clanak-naslov">' . $row['naslov'] . '</h3>';
        echo '</a>';
        echo '</div>';

        $count++;
      }

      echo '</div>';
    }
    ?>
  </div>
  <footer class="footer">
    <p>Tin Milković</p>
  </footer>
</body>

</html>
