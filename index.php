<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" type="text/css">
  <title>Naslovna</title>
</head>
<body>
  <div class="container">
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

    <?php 
      include 'connect.php';
      define('UPLPATH', 'img/');
    ?>

    <div class="wrapper">
      <div class="kategorija">
        <h2 class="kategorija-naslov">Sport</h2>
        <div class="red-clanaka">
          <?php 
            $query = "SELECT * FROM clanak WHERE arhiva=0 AND kategorija='sport' LIMIT 3";
            $result = mysqli_query($dbc, $query);
            
            while($row = mysqli_fetch_array($result)) {
              echo '<div class="clanak-box">';
              echo '<a href="clanak.php?id='.$row['id'].'">';
              echo '<img class="clanak-img" src="'.UPLPATH . $row['slika'].'" />';
              echo '<h3 class="clanak-naslov">' . $row['naslov'] . '</h3>';
              echo '</a>';
              echo '</div>';
            }
          ?>
        </div>
      </div>

      <div class="kategorija">
        <h2 class="kategorija-naslov">Politika</h2>
        <div class="red-clanaka">
          <?php 
            $query = "SELECT * FROM clanak WHERE arhiva=0 AND kategorija='politika' LIMIT 3";
            $result = mysqli_query($dbc, $query);
            
            while($row = mysqli_fetch_array($result)) {
              echo '<div class="clanak-box">';
              echo '<a href="clanak.php?id='.$row['id'].'">';
              echo '<img class="clanak-img" src="'.UPLPATH . $row['slika'].'" />';
              echo '<h3 class="clanak-naslov">' . $row['naslov'] . '</h3>';
              echo '</a>';
              echo '</div>';
            }
          ?>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <p>Tin Milković</p>
  </footer>
</body>
</html>
