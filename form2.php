<html>
<style>
.grijs {
	margin-left:auto;
	margin-right:auto;
    max-width: 500px;
    background: #F7F7F7;
    padding: 25px 15px 25px 10px;
    font: 12px Georgia, "Times New Roman", Times, serif;
    color: #888;
    text-shadow: 1px 1px 1px #FFF;
    border:1px solid #E4E4E4;
    border-radius:100px;
}
.grijs h1 {
    font-size: 25px;
    padding: 0px 0px 10px 40px;
    display: block;
    border-bottom:1px solid #E4E4E4;
    margin: -10px -15px 30px -10px;;
    color: #888;
}
.grijs h1>span {
    display: block;
    font-size: 11px;
}
.grijs label {
    display: block;
    margin: 0px;
}
.grijs label>span {
    float: left;
    width: 20%;
    text-align: right;
    padding-right: 10px;
    margin-top: 10px;
    color: #888;
}
.grijs input[type="text"], .grijs input[type="email"], .grijs textarea, .grijs select {
	border: 1px solid #DADADA;
	color: #888;
	height: 30px;
	margin-bottom: 16px;
	margin-right: 6px;
	margin-top: 2px;
	outline: 0 none;
	padding: 3px 3px 3px 5px;
	width: 70%;
	font-size: 12px;
	line-height:15px;
	box-shadow: inset 0px 1px 4px #ECECEC;
	-moz-box-shadow: inset 0px 1px 4px #ECECEC;
	-webkit-box-shadow: inset 0px 1px 4px #ECECEC;
}
.grijs textarea{
	padding: 5px 3px 3px 5px;
}
.grijs select {
    background: #FFF;
    background: #FFF;
    appearance:none;
    -webkit-appearance:none; 
    -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    width: 70%;
    height: 35px;
	line-height: 25px;
}
.grijs textarea{
    height:100px;
}
.grijs .button {
	background: #E27575;
	border: none;
	padding: 10px 25px 10px 25px;
	color: #FFF;
	box-shadow: 1px 1px 5px #B6B6B6;
	border-radius: 3px;
	text-shadow: 1px 1px 1px #9E3F3F;
	cursor: pointer;
}
.grijs .button:hover {
    background: #CF7A7A
}
</style>

<form action="form2_get.php" method="post" class="grijs">
    <span><div align="center"><h1>Voeg nieuwe leraar toe</h1></div></span>
    	<span><div align="center">Vul alstublieft alle velden in</div></span><br/>
    <label>
    	<span>Naam leraar</span>
        <input id="leraarnaam" type="text" name="leraarnaam" placeholder="Naam van de leraar" />
    </label>
    
    <label>
    	<span>E-mail leraar :</span>
        <input id="email" type="email" name="email" placeholder="Geldig e-mailadres" />
    </label>
    
    <label>
    	<span>Vakken</span>
        <textarea id="vakken" name="vakken" placeholder="Vakgebieden van leraar"></textarea>
    </label>    
     <label>
    	<span> </span> 
        <input type="submit" class="button" value="Verstuur" /> 
    </label>    
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $vakken = $_REQUEST['vakken'];
    if (empty($vakken)) {
        echo "Het invullen van vakken is verplicht";
    } 
    $email = $_REQUEST['email'];
    if (empty($email)) {
        echo "<br/>E-mail invullen is verplicht";
    } 
    $leraarnaam = $_REQUEST['leernaam'];
    if (empty($leraarnaam)) {
        echo "<br/>Leraarnaam invullen is verplicht";
    } 
}

?>