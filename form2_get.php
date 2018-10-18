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
    text-align: center;
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
<body>
<div class="grijs">
<h2>Bedankt!<br/> Uw invoer is verwerkt als volgt.</h2> <br/>
<h3>Leraarnaam:</h3><br/> <?php echo $_POST["leraarnaam"]; ?><br/>
<h3>E-mail:</h3><br/> <?php echo $_POST["email"]; ?><br/>
<H3>Vakken:</h3><br/> <?php echo $_POST["vakken"]; ?>
</div>
</body>
</html>