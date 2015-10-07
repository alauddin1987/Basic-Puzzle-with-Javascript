<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
	<title>box of auto sign</title>
  <script src="form_submit.js"></script></head>

<body>
<div id ="box">
<div id ="log"><img src="field-logo.jpg" /></div>
<div id ="form-body"> 
<form action="problem_2.php" method="post" id="form">
<div id="left">
  <p>Name:</p>
  <p>Font size:</p>
  <p>Color: </p>
  <p>Bold: </p>
  <p>Italic:</p>
</div>
<div id="right">
  <p>
    <input type="text" placeholder="Field Nation" id="name" />
  </p>
  <p>
    <select id='font' name="font size">
        <option value="18">18 </option>
        <option value="20">20 </option>
        <option value="24">24 </option>
        <option value="28">28 </option>
        <option value="32">32 </option>
    </select>
  </p>
  <p>
    <input type="radio" name="color" value="green" id="color_1">
  green 
  <input type="radio" name="color" value="blue" id="color_2" checked>
  blue </p>
  <p>
    <input type="checkbox" name="CheckboxGroup1" value="Bold" id="bold">
  </p>
  <p>
    <input type="checkbox" name="CheckboxGroup1" value="Italic" id="italic">
  </p>
</div>
</form>
</div>
	<div id="output-box">
    	<div id="output"></div>
    
    </div>
</div>

</body>
</html>
