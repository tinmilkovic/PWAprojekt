<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" type="text/css">
  <title>Registracija</title>
  <style>
    <?php include 'style.css'; ?>
  </style>
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

    <div class="wrapper">
      <?php
        include 'connect.php';

        $ime = isset($_POST['ime']) ? $_POST['ime'] : "";
        $prezime = isset($_POST['prezime']) ? $_POST['prezime'] : "";
        $username = isset($_POST['username']) ? $_POST['username'] : "";
        $lozinka = isset($_POST['pass']) ? $_POST['pass'] : "";
        $razina = isset($_POST['razina']) && $_POST['razina'] == 'administrator' ? 1 : 0;
        $hashed_password = password_hash($lozinka, CRYPT_BLOWFISH);
        $registriranKorisnik = '';

        // Provjera postoji li u bazi već korisnik s tim korisničkim imenom
        if (!empty($username)) {
          $sql = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = ?";
          $stmt = mysqli_stmt_init($dbc);
          if (mysqli_stmt_prepare($stmt, $sql)) {
              mysqli_stmt_bind_param($stmt, 's', $username);
              mysqli_stmt_execute($stmt);
              mysqli_stmt_store_result($stmt);
          }
          if (mysqli_stmt_num_rows($stmt) > 0) {
              $msg = 'Korisničko ime već postoji!';
          } else {
              $sql = "INSERT INTO korisnik (ime, prezime, korisnicko_ime, lozinka, razina) VALUES (?, ?, ?, ?, ?)";
              $stmt = mysqli_stmt_init($dbc);
              if (mysqli_stmt_prepare($stmt, $sql)) {
                  mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $username, $hashed_password, $razina);
                  mysqli_stmt_execute($stmt);
                  $registriranKorisnik = true;
              }
          }
          mysqli_close($dbc);
        }

        if ($registriranKorisnik == true) {
          echo '<p>Korisnik je uspješno registriran!</p>';
        } else {
          echo '<div class="form-container">';
          echo '<h2>Registracija</h2>';
          echo '<form method="POST" action="">';
          echo '<div class="form-group">';
          echo '<label for="ime" class="form-label">Ime:</label>';
          echo '<input type="text" id="ime" name="ime" class="form-input" required>';
          echo '</div>';
          echo '<div class="form-group">';
          echo '<label for="prezime" class="form-label">Prezime:</label>';
          echo '<input type="text" id="prezime" name="prezime" class="form-input" required>';
          echo '</div>';
          echo '<div class="form-group">';
          echo '<label for="username" class="form-label">Korisničko ime:</label>';
          echo '<input type="text" id="username" name="username" class="form-input" required>';
          echo '</div>';
          echo '<div class="form-group">';
          echo '<label for="pass" class="form-label">Lozinka:</label>';
          echo '<input type="password" id="pass" name="pass" class="form-input" required>';
          echo '</div>';
          echo '<div class="form-group">';
          echo '<label for="razina" class="form-label">Razina administrator:</label>';
          echo '<input type="checkbox" id="razina" name="razina" value="administrator" class="form-input">';
          echo '</div>';
          echo '<div class="form-group">';
          echo '<button type="submit" class="form-button">Registriraj se</button>';
          echo '</div>';
          echo '</form>';
          if (isset($msg)) {
            echo '<p>' . $msg . '</p>';
          }
          echo '</div>';
        }
      ?>
    </div>
  </div>

  <footer class="footer">
    <p>Tin Milković</p>
  </footer>
</body>
</html>