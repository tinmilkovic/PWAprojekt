<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Unos</title>
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

  <br />

<div class="wrapper">

  <div class="form-container">
    <form  enctype="multipart/form-data" method="POST" action="skripta.php" id="forma">
      <label for="naslov" class="form-label">Naslov:</label>
      <input type="text" name="naslov" id="naslov" /><br />
      <label for="sazetak">Kratki sadržaj:</label>
      <textarea id="sazetak" name="sazetak" rows="2" cols="50"></textarea>
      <label for="tekst">Tekst:</label>
      <textarea id="tekst" name="tekst" rows="10" cols="50"></textarea>
      <label for="kategorija">Kategorija</label>
      <select name="kategorija" id="kategorija">
        <option value="politika">Politika</option>
        <option value="sport">Sport</option>
      </select>
      <label for="slika" class="form-label">Slika:</label>
      <input type="file" id="slika" name="slika" class="form-input" />
      <label for="arhiva">arhiva:</label>
      <input type="checkbox" name="arhiva" id="arhiva" />
      <br />

      <button type="submit" class="form-button">Pošalji</button>
    </form>
  </div>
</div>
  <footer class="footer">
    <p>Tin Milković</p>
  </footer>

  <script>
    document.getElementById("forma").addEventListener("submit", function(event) {
      let naslov = document.getElementById("naslov").value;
      let sazetak = document.getElementById("sazetak").value;
      let tekst = document.getElementById("tekst").value;
      let slika = document.getElementById("slika").value;
      let kategorija = document.getElementById("kategorija").value;

      let errors = [];

      if (naslov.length < 5 || naslov.length > 30) {
        errors.push("Naslov vijesti mora imati između 5 i 30 znakova.");
        document.getElementById("naslov").style.borderColor = "red";
      } else {
        document.getElementById("naslov").style.borderColor = "";
      }

      if (sazetak.length < 10 || sazetak.length > 100) {
        errors.push("Kratki sadržaj vijesti mora imati između 10 i 100 znakova.");
        document.getElementById("sazetak").style.borderColor = "red";
      } else {
        document.getElementById("sazetak").style.borderColor = "";
      }

      if (tekst.trim() === "") {
        errors.push("Tekst vijesti ne smije biti prazan.");
        document.getElementById("tekst").style.borderColor = "red";
      } else {
        document.getElementById("tekst").style.borderColor = "";
      }

      if (slika === "") {
        errors.push("Morate odabrati sliku.");
        document.getElementById("slika").style.borderColor = "red";
      } else {
        document.getElementById("slika").style.borderColor = "";
      }

      if (kategorija === "") {
        errors.push("Morate odabrati kategoriju.");
        document.getElementById("kategorija").style.borderColor = "red";
      } else {
        document.getElementById("kategorija").style.borderColor = "";
      }

      if (errors.length > 0) {
        event.preventDefault();
        let errorString = errors.join("\n");
        alert(errorString);
      }
    });
  </script>
</body>
</html>
