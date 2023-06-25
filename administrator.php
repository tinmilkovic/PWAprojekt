<?php
session_start();
include 'connect.php';
define('UPLPATH', 'img/');

if (!isset($_SESSION['username']) || $_SESSION['razina'] != 1) {
    header('Location: prijava.php');
    exit();
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM clanak WHERE id = $id";
    mysqli_query($dbc, $query);
    header('Location: administrator.php');
    exit();
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $about = $_POST['about'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $archive = isset($_POST['archive']) ? 1 : 0;

    if ($_FILES['pphoto']['error'] === UPLOAD_ERR_OK) {
        $pphoto = $_FILES['pphoto']['name'];
        $target = UPLPATH . $pphoto;
        move_uploaded_file($_FILES['pphoto']['tmp_name'], $target);
        $query = "UPDATE clanak SET naslov = '$title', sazetak = '$about', tekst = '$content', slika = '$pphoto', kategorija = '$category', arhiva = '$archive' WHERE id = $id";
    } else {
        $query = "UPDATE clanak SET naslov = '$title', sazetak = '$about', tekst = '$content', kategorija = '$category', arhiva = '$archive' WHERE id = $id";
    }

    mysqli_query($dbc, $query);
    header('Location: administrator.php');
    exit();
}

$query = "SELECT * FROM clanak";
$result = mysqli_query($dbc, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Administracija</title>
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
            <h2 class="kategorija-naslov">Administracija</h2>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <form enctype="multipart/form-data" action="" method="POST">
                    <div class="form-item">
                        <label for="title">Naslov članka:</label>
                        <div class="form-field">
                            <input type="text" name="title" class="form-field-textual" value="<?php echo $row['naslov']; ?>">
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="about">Kratki sažetak članka (do 50 znakova):</label>
                        <div class="form-field">
                            <textarea name="about" id="" cols="30" rows="10" class="formfield-textual"><?php echo $row['sazetak']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="content">Sadržaj članka:</label>
                        <div class="form-field">
                            <textarea name="content" id="" cols="30" rows="10" class="formfield-textual"><?php echo $row['tekst']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="pphoto">Slika:</label>
                        <div class="form-field">
                            <input type="file" class="input-text" id="pphoto" name="pphoto" /> <br>
                            <img src="<?php echo UPLPATH . $row['slika']; ?>" width="100px">
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="category">Kategorija članka:</label>
                        <div class="form-field">
                            <select name="category" id="" class="form-field-textual">
                                <option value="sport" <?php if ($row['kategorija'] == 'sport') echo 'selected'; ?>>Sport</option>
                                <option value="politika" <?php if ($row['kategorija'] == 'politika') echo 'selected'; ?>>Politika</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-item">
                        <label>Spremiti u arhivu:</label>
                        <div class="form-field">
                            <?php if ($row['arhiva'] == 0) { ?>
                                <input type="checkbox" name="archive" id="archive" /> Arhiviraj?
                            <?php } else { ?>
                                <input type="checkbox" name="archive" id="archive" checked /> Arhiviraj?
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-item">
                        <input type="hidden" name="id" class="form-field-textual" value="<?php echo $row['id']; ?>">
                        <button type="reset" value="Poništi">Poništi</button>
                        <button type="submit" name="update" value="Prihvati">Izmjeni</button>
                        <button type="submit" name="delete" value="Izbriši">Izbriši</button>
                    </div>
                </form>
            <?php } ?>

        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2023 Web Development News. All rights reserved. Created by Your Name</p>
    </footer>
</body>

</html>
