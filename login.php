<?php
session_start();
include 'connect.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Koristimo prepared statement za sigurnu provjeru korisničkog unosa
    $stmt = mysqli_prepare($dbc, "SELECT * FROM users WHERE username = ? AND password = ?");
    mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        // Korisnik je uspješno prijavljen, pohranjujemo korisničko ime u sesiju
        $_SESSION['username'] = $username;
        header('Location: administracija.php');
        exit();
    } else {
        // Neuspješna prijava, provjeravamo postoji li korisničko ime u bazi
        $stmt_check = mysqli_prepare($dbc, "SELECT * FROM users WHERE username = ?");
        mysqli_stmt_bind_param($stmt_check, 's', $username);
        mysqli_stmt_execute($stmt_check);
        $result_check = mysqli_stmt_get_result($stmt_check);

        if (mysqli_num_rows($result_check) == 0) {
            // Korisničko ime ne postoji, preusmjeravamo na registraciju
            header('Location: registracija.php');
            exit();
        } else {
            // Korisničko ime postoji, prikazujemo poruku o neispravnoj lozinci
            echo 'Neispravna lozinka.';
        }
    }
}
?>
