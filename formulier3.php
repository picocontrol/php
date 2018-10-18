<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// definieer variabelen en zet op lege input
$naamErr = $emailErr = $geslachtErr = $websiteErr = "";
$naam = $email = $geslacht = $opmerking = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["naam"])) {
    $naamErr = "Naam is verplicht";
  } else {
    $naam = test_input($_POST["naam"]);
    // check of naam letters en spatie bevat
    if (!preg_match("/^[a-zA-Z ]*$/",$naam)) {
      $naamErr = "Alleen letters en spaties toegestaan"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "E-mail is verplicht";
  } else {
    $email = test_input($_POST["email"]);
    // check of e-mail addres goed is ingevuld
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Ongeldig e-mail formaat"; 
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check of de website geldig is
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Ongeldige URL"; 
    }
  }

  if (empty($_POST["opmerking"])) {
    $opmerking = "";
  } else {
    $opmerking = test_input($_POST["opmerking"]);
  }

  if (empty($_POST["geslacht"])) {
    $geslachtErr = "Geslacht is verplicht";
  } else {
    $geslacht = test_input($_POST["geslacht"]);
  }
}
?>

<h2>PHP formulier validatie</h2>
<p><span class="error">* verplicht veld</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Naam: <input type="text" name="name">
  <span class="error">* <?php echo $naamErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Opmerking: <textarea name="opmerking" rows="5" cols="40"></textarea>
  <br><br>
  Geslacht:
  <input type="radio" name="geslacht" value="vrouw">Vrouw
  <input type="radio" name="geslacht" value="man">Man
  <input type="radio" name="geslacht" value="anders">Anders
  <span class="error">* <?php echo $geslachtErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Jouw input:</h2>";
echo $naam;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $opmerking;
echo "<br>";
echo $geslacht;
?>

</body>
</html>