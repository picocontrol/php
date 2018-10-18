<html>
<style>

#achtergrond {
    background-image: url("backgroundform.jpg");
    background-repeat: no-repeat;
    background-position: top;
    height: 400px;
    border-radius: 50px;
}

input[type=text] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    background-color: #8ca1bc;
    background-position: -100px -100px; 
    background-repeat: no-repeat;
    padding-left: 40px;
}

input[type=number] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    background-color:#8ca1bc;
    background-position: -10px -10px; 
    background-repeat: no-repeat;
    padding-left: 40px;
}
input[type=text]:focus {
    border: 3px solid red;
    background-color:#8ca1bc;
}
input[type=number]:focus {
    border: 3px solid red;
    background-color:#8ca1bc;
}
form {
    text-align: center;
    height: 300px;
}
h1 {
    text-align: center;
}

descr {
    min-width: 15%;
}

</style>
<body>
<div id="achtergrond">
<text-align: center>
<h1> Voer het cijfer in van een nieuw vak</h1>

<form method="post" action="form_get.php">
  <div id="descr">Vak</div><input type="text" name="vak"><br/>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div id="descr">Cijfer</div><input type="number" name="cijfer"><br/>
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $vak = $_REQUEST['vak'];
    if (empty($vak)) {
        echo "Vak is leeg";
    } else {
        echo "Cijfer doorgegeven voor: <br/><h2>Vak: $vak</h2>";
    }
    $cijfer = $_REQUEST['cijfer'];
    if (empty($cijfer)) {
        echo "<br/>Cijfer is leeg";
    } else {
        echo "<br/><h2>Cijfer: $cijfer</h2><br/>Bedankt voor het doorgeven!";
    }
}
?>
</div>
</body>
</html>