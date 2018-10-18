<html>
<style>
#achtergrond {
    background-image: url("backgroundform.jpg");
    background-repeat: no-repeat;
    background-position: top;
    height: 400px;
    border-radius: 50px;
}
</style>
<body>
<div id="achtergrond" align="center" vertical-align: "center">
<h1>Bedankt! Uw invoer is verwerkt als volgt.</h1> <br>
<h2>Het cijfer voor <?php echo $_POST["vak"]; ?> is <?php echo $_POST["cijfer"]; ?></h2>
</div>
</body>
</html>