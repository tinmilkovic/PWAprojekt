<?php
session_start();
include 'connect.php';

// Provjera je li korisnik već prijavljen
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Izvršavanje upita za provjeru korisničkog imena u bazi podataka
    $query = "SELECT * FROM korisnik WHERE korisnicko_ime = '$username'";
    $result = mysqli_query($dbc, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Provjera kriptirane lozinke
        if (password_verify($password, $row['lozinka'])) {
            // Provjera razine prava korisnika
            if ($row['razina'] == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['razina'] = $row['razina'];
                header('Location: administrator.php');
                exit();
            } elseif ($row['razina'] == 0) {
                echo 'Poštovani ' . $username . ', nemate pravo pristupa administratorskoj stranici.';
                exit();
            } else {
                echo 'Nevažeća razina prava.';
                exit();
            }
        } else {
            echo 'Unijeli ste neispravno korisničko ime i/ili lozinku. Morate se prvo registrirati.';
            echo '<a href="registracija.php">link za registraciju</a>';
            exit();
        }
    } else {
        echo 'Unijeli ste neispravno korisničko ime i/ili lozinku. Morate se prvo registrirati.';
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Prijava</title>
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
        <div class="content">
            <h2 class="kategorija-naslov">Prijava</h2>
            <form action="" method="POST">
                <div class="form-item">
                    <label for="username">Korisničko ime:</label>
                    <div class="form-field">
                        <input type="text" name="username" class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <label for="password">Lozinka:</label>
                    <div class="form-field">
                        <input type="password" name="password" class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <button type="submit" name="login" value="Prijava">Prijavi se</button>
                </div>
            </form>
            <p>Nemate korisnički račun? <a href="registracija.php">Registrirajte se ovdje</a></p>
        </div>
        
    </div>
    <footer class="footer">
        <p>&copy; 2023 Web Development News. All rights reserved. Created by Your Name</p>
    </footer>
</body>

</html>
